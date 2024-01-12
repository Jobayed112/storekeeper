<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Sale Product
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('sell-product/' . $product->id) }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">Total item?</label>
                            <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="quantity">How many item want to sale?</label>
                            <input type="number" name="quantity" class="form-control" required><br>
                        </div>
                        <div class="text-center form-group mb-3">
                            <button type="submit" class="col-12 btn btn-primary"
                                style="display: inline">Sale</button>
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
