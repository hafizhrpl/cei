<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .report-container {
            margin: 20px;
            border: 1px solid #007bff;
            border-radius: 8px;
        }
        .report-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .report-actions {
            margin: 15px;
            display: flex;
            justify-content: space-between;
        }
      
       
    </style>
</head>
<body>

    <div class="report-container">
        <div class="report-header">
            <h4>Laporan</h4>
        </div>
        <div class="report-actions">
            <div class="filter-buttons">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Filter Kandang</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Filter Periode</button>
            </div>
            <div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Export Data</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Cetak Data</button>
            </div>
            <div>
                <input type="text" class="form-control form-control-sm" placeholder="Cari data">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Ring</th>
                            <th> Nomer Kandang</th>
                            <th> Tgl Tetas</th>
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
</body>
</html>