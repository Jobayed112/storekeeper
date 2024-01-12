<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Product
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-product/'.$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">Total item?</label>
                            <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Unit price</label>
                            <input type="number" name="unit_price" value="{{ $product->unit_price }}" class="form-control">
                        </div>
                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary">Update</button>
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
