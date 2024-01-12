<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Sell;
use App\Models\Sold;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Product_Controller extends Controller
{
   public function index()
   {
      $products = Products::all();
      $soldItems = Sold::all();

      $todaySales = Sold::whereDate('stored_at', today())->sum('price_sold');
      $yesterdaySales = Sold::whereDate('stored_at', today()->subDay())->sum('price_sold');
      $thisMonthSales = Sold::whereYear('stored_at', today()->year)
         ->whereMonth('stored_at', today()->month)
         ->sum('price_sold');
      $lastMonthSales = Sold::whereYear('stored_at', today()->subMonth()->year)
         ->whereMonth('stored_at', today()->month)
         ->sum('price_sold');

      return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales', 'products', 'soldItems'));
   }

   public function create()
   {
      return view('create');
   }

   public function store(Request $request)
   {
      // Validate the incoming request data
      $request->validate([
         'name' => 'required|string|max:255',
         'quantity' => 'required|integer|min:0',
         'unit_price' => 'required|numeric|min:0',
      ]);

      // Create a new Products instance and set its properties
      $product = new Products;
      $product->name = $request->input('name');
      $product->quantity = $request->input('quantity');
      $product->unit_price = $request->input('unit_price');

      // Save the product to the database
      $saved = $product->save();

      // Check if the product was saved successfully
      if ($saved) {
         // Redirect to the index page with a success message
         return redirect('/')->with('status', 'Product added successfully');
      } else {
         // Redirect back with an error message if there was an issue saving the product
         return redirect()->back()->with('error', 'Failed to add product');
      }
   }


   public function edit($id)
   {
      $product = Products::find($id);
      return view('edit', compact('product'));
   }

   public function update(Request $request, $id)
   {
      $product = Products::find($id);
      $product->name = $request->input('name');
      $product->quantity = $request->input('quantity');
      $product->unit_price = $request->input('unit_price');
      $product->update();

      return redirect('/')->with('status', 'Updated Successfully');
   }

   // public function delete($id) {
   //     $product = Products::find($id);
   //     $product->delete();

   //     return redirect('/')->with('status', 'Deleted Successfully');
   // }

   public function delete($id)
   {
      $product = Products::find($id);

      $hasSales = Sold::where('product_id', $id)->exists();

      if ($hasSales) {
         return redirect('/')->with('error', 'Cannot delete product with associated sales');
      }

      $product->delete();

      return redirect('/')->with('status', 'Deleted Successfully');
   }

   public function sold($id)
   {
      $product = Products::find($id);
      return view('sell', compact('product'));
   }

   public function sell(Request $request, $id)
   {
      $product = Products::find($id);

      $requestedQuantity = $request->input('quantity');

      if ($product->quantity >= $requestedQuantity) {
         $priceSold = $requestedQuantity * $product->unit_price;

         $product->quantity -= $requestedQuantity;
         $product->update();

         Sold::create([
            'product_id' => $product->id,
            'quantity_sold' => $requestedQuantity,
            'price_sold' => $priceSold,
            'sold_at' => now(),
         ]);

         return redirect('/')->with('status', 'Product sold successfully');
      } else {
         return redirect('/')->with('status', 'Insufficient quantity to sell');
      }
   }
}
