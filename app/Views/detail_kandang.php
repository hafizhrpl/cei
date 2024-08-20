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
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>

                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Ring</th>
                                    <th>Tgl Telur</th>
                                    <th>Tgl Tetas</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>20</td>
                                    <td>coba</td>
                                    <td>
                                        <button class="btn btn-primary">Detail</button>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditKandang">Edit</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaKandang">Kode Ring</label>
                                <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="produksi">Keterangan</label>
                                <input type="text" class="form-control" id="produksi" placeholder="Masukkan Produksi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Tgl Telur</label>
                                <input type="number" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="umurJantan">Tgl Tetas</label>
                                <input type="number" class="form-control" id="umurJantan" placeholder="Masukkan Umur Jantan">
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

    <div class="modal fade" id="datatelur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input data telur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaKandang">Kode Ring</label>
                                <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="produksi">Keterangan</label>
                                <input type="textarea" class="form-control" id="produksi" placeholder="Masukkan Produksi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Tgl Telur</label>
                                <input type="date" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="umurJantan">Tgl Tetas</label>
                                <input type="date" class="form-control" id="umurJantan" placeholder="Masukkan Umur Jantan">
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

    <div class="modal fade" id="EditKandang" tabindex="-1" aria-labelledby="EditKandang" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditKandang">Edit Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
            <form>
            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaKandang">Kode Ring</label>
                                <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="produksi">Keterangan</label>
                                <input type="textarea" class="form-control" id="produksi" placeholder="Masukkan Produksi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Tgl Telur</label>
                                <input type="date" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="umurJantan">Tgl Tetas</label>
                                <input type="date" class="form-control" id="umurJantan" placeholder="Masukkan Umur Jantan">
                            </div>
                        </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveData()">Save changes</button>
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
                                <label for="produksi">Minggu</label>
                                <input type="number" class="form-control" id="produksi" placeholder>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Keterangan</label>
                                <input type="textarea" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
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