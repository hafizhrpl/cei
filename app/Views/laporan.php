<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <div class="container mt-4">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white text-center">
                <h4>Laporan</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary mr-2 rounded" data-toggle="modal" data-target="#exampleModal">Filter Kandang</button>
                        <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#exampleModal">Filter Periode</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success mr-2 rounded" data-toggle="modal" data-target="#exampleModal">Export Data</button>
                        <button type="button" class="btn btn-success rounded" data-toggle="modal" data-target="#exampleModal">Cetak Data</button>
                    </div>
                    <div class="form-inline">
                        <input type="text" class="form-control form-control-sm" placeholder="Cari data">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-white">
                            <tr>
                                <th>No</th>
                                <th>Kode Ring</th>
                                <th>Nomer Kandang</th>
                                <th>Tgl Tetas</th>
                                <th>Keterangan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>10</td>
                                <td>20</td>
                                <td>12</td>
                                <td>berhasil</td>
                                <td>berhasil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>