{{-- <!-- Contents for dashboard --> --}}
<div id="dashboard-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="dashboard-menu-toggle"></i>
            <h2 class="fs-2 m-0">Admin</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">

        <div>
            @if (SESSION('status'))
                <div class="alert alert-success">{{ SESSION('status') }}</div>
            @endif
        </div>
        <div>
            @if (SESSION('error'))
                <div class="alert alert-warning">{{ SESSION('error') }}</div>
            @endif
        </div>
        <div>
            <a href="{{ url('add-product') }}" class="btn btn-primary col-2 p-2 rounded">ADD PRODUCTS+</a>
        </div>
        <div class="row my-5">
            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stored At</th>
                            <th scope="col">Last Updated At</th>
                            <th scope="col">Action</th>
                            <th scope="col">Sale</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td scope="col">{{ $product->id }}</td>
                                <td scope="col">{{ $product->name }}</td>
                                <td scope="col">{{ $product->quantity }}</td>
                                <td scope="col">{{ $product->unit_price }}</td>
                                <td scope="col">{{ $product->created_at }}</td>
                                <td scope="col">{{ $product->updated_at }}</td>
                                <td>
                                    <a href="{{ url('edit-product/' . $product->id) }}"
                                        class='col-6 btn btn-warning mb-2' style="display: inline">Update</a>
                                    <a href="{{ url('delete-product/' . $product->id) }}"
                                        class='col-6 btn btn-danger'>Delete</a>
                                </td>
                                <td>
                                    <a href="{{ url('sold-product/' . $product->id) }}"
                                        class='my-color col-6 btn  btn-danger'>Sale</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
