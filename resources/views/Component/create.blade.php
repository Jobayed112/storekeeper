<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Add Product
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('store-product') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Enter item name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">How many item?</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Enter price</label>
                            <input type="number" name="unit_price" class="form-control">
                        </div>
                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary">Submit</button>
                        </div>
                        <div class="text-center form-group mb-3">
                            <a href="{{ url('/') }}" class="col-12 btn btn-warning">back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
