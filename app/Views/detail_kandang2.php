<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border-custom {
            border: 0;
            height: 2px;
            /* Ketebalan garis */
            background-color: #000000;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- Form Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary ">Detail data kandang</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaKandang">Nama Kandang</label>
                            <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="produksi">Kitir silsilah</label>
                            <input type="textarea" class="form-control" id="produksi" placeholder>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="indukJantan">Induk Jantan</label>
                            <input type="text" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="indukBetina">Induk Betina</label>
                            <input type="text" class="form-control" id="indukBetina" placeholder="Masukkan Induk Betina">
                        </div>


                    </div>
                    <hr class="border-custom mb-4">
                </form>
                
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#datavitamin">Tambah Data</button>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Minggu 1</th>
                                    <th>Minggu 2</th>
                                    <th>Minggu 3</th>
                                    <th>Minggu 4</th>
                                    <th>Minggu 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>agustus</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                    <td>coba</td>
                                    <td>coba</td>
                                  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="datavitamin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input data vitamin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="bulan">Bulan</label>
                                <select class="form-control" id="bulan">
                                    <option value="">Pilih Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="minggu">Minggu</label>
                                <select class="form-control" id="Minggu">
                                    <option value="">Pilih Minggu</option>
                                    <option value="Minggu 1">Minggu 1</option>
                                    <option value="Minggu 1">Minggu 2</option>
                                    <option value="Minggu 1">Minggu 3</option>
                                    <option value="Minggu 1">Minggu 4</option>
                                    <option value="Minggu 1">Minggu 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Keterangan</label>
                                <input type="textarea" class="form-control" id="indukJantan" placeholder>
                            </div>

                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="saveData()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>