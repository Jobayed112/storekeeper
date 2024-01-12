{{-- Contents for Analytics portion --}}
<div id="page-content-wrapper" style="display:none;">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="analytics-menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashbaord</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="card">
                    <div class="text-center card-body">
                        <h5 class="card-title">Today's Sales</h5>
                        <p class="card-text">{{ $todaySales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="text-center card-body">
                        <h5 class="card-title">Yesterday's Sales</h5>
                        <p class="card-text">{{ $yesterdaySales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="text-center card-body">
                        <h5 class="card-title">This Month's Sales</h5>
                        <p class="card-text">{{ $thisMonthSales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="text-center card-body">
                        <h5 class="card-title">Last Month's Sales</h5>
                        <p class="card-text">{{ $lastMonthSales }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
