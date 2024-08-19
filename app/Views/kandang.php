<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Kandang</th>
                            <th>Nama Kandang</th>
                            <th>Jantan</th>
                            <th>Betina</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
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

<!-- Modal for Adding New Kandang Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kandang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="kandangForm">
                    <div class="form-group">
                        <label for="kodeKandang">Kode Kandang</label>
                        <input type="text" class="form-control" id="kodeKandang" placeholder="Masukkan kode kandang">
                    </div>
                    <div class="form-group">
                        <label for="namaKandang">Nama Kandang</label>
                        <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan nama kandang">
                    </div>
                    <div class="form-group">
                        <label for="jantan">Jantan</label>
                        <input type="number" class="form-control" id="jantan" placeholder="Jumlah Jantan">
                    </div>
                    <div class="form-group">
                        <label for="betina">Betina</label>
                        <input type="number" class="form-control" id="betina" placeholder="Jumlah Betina">
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

<!-- Modal for Adding New Kandang Data -->
<div class="modal fade" id="EditKandang" tabindex="-1" aria-labelledby="EditKandang" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditKandang">Edit Data Kandang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="kandangForm">
                    <div class="form-group">
                        <label for="kodeKandang">Kode Kandang</label>
                        <input type="text" class="form-control" id="kodeKandang" placeholder="Masukkan kode kandang">
                    </div>
                    <div class="form-group">
                        <label for="namaKandang">Nama Kandang</label>
                        <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan nama kandang">
                    </div>
                    <div class="form-group">
                        <label for="jantan">Jantan</label>
                        <input type="number" class="form-control" id="jantan" placeholder="Jumlah Jantan">
                    </div>
                    <div class="form-group">
                        <label for="betina">Betina</label>
                        <input type="number" class="form-control" id="betina" placeholder="Jumlah Betina">
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