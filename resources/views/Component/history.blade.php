{{-- Contents for Feedback portion --}}
<div id="feedback-content-wrapper" style="display:none;">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="feedback-menu-toggle"></i>
            <h2 class="fs-2 m-0">Transaction History</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row my-5">
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            {{-- <th scope="col">Product ID</th> --}}
                            <th scope="col">Quantity Sold</th>
                            <th scope="col">Price Sold</th>
                            <th scope="col">Sold At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($soldItems as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                {{-- <td>{{ $soldItem->name ?? 'N/A' }}</td> --}}
                                <td>{{ $item->quantity_sold }}</td>
                                <td>{{ $item->price_sold }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
