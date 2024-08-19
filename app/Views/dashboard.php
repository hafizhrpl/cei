<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-3">
                    <i class="fas fa-calendar fa-3x text-gray-300"></i>
                </div>
                <div class="col-auto">
                    <div class="h1 mb-0 font-weight-bold text-gray-800" style="font-size: 3rem;">80</div>
                </div>
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Kandang</div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-3">
                    <i class="fas fa-calendar fa-3x text-gray-300"></i>
                </div>
                <div class="col-auto">
                    <div class="h1 mb-0 font-weight-bold text-gray-800" style="font-size: 3rem;">80</div>
                </div>
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Kandang</div>
                </div>
            </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-3">
                    <i class="fas fa-calendar fa-3x text-gray-300"></i>
                </div>
                <div class="col-auto">
                    <div class="h1 mb-0 font-weight-bold text-gray-800" style="font-size: 3rem;">80</div>
                </div>
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Kandang</div>
                </div>
            </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-3">
                    <i class="fas fa-calendar fa-3x text-gray-300"></i>
                </div>
                <div class="col-auto">
                    <div class="h1 mb-0 font-weight-bold text-gray-800" style="font-size: 3rem;">80</div>
                </div>
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Kandang</div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-lg-7">
            <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Bulanan</h6>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="table-responsive">
                        <h6 class="m-0 font-weight-bold text-primary">Bulan : Januari</h6>
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Kode Ring</th>
                                        <th>Kode Kandang</th>
                                        <th>Tgl Telur</th>
                                        <th>Tgl Tetas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Telur Tetas</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
