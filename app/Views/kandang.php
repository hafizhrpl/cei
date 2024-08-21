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
                            <th> Jantan</th>
                            <th> Betina</th>
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailKandang">Detail</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputkandang">Input Data Kandang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaKandang">Nama Kandang</label>
                            <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="produksi">Produksi</label>
                            <input type="text" class="form-control" id="produksi" placeholder="Masukkan Produksi">
                        </div>
                    </div>

                    <!-- Checkbox untuk Induk Jantan dan Umur Jantan -->
                    <div class="form-row">
                        <!-- Checkbox di atas label Induk Jantan -->
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="disableIndukJantanUmurJantan" class="mb-2">
                            <label for="indukJantan">Induk Jantan</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                            </div>
                        </div>

                        <!-- Checkbox di atas label Umur Jantan -->
                        <div class="form-group col-md-6">
                            <label for="umurJantan">Umur Jantan</label>
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control" id="umurJantan" placeholder="Masukkan Umur Jantan">
                            </div>
                        </div>
                    </div>

                    <!-- Checkbox untuk Induk Betina dan Umur Betina -->
                    <div class="form-row">
                        <!-- Checkbox di atas label Induk Betina -->
                        <div class="form-group col-md-6">
                            <input type="checkbox" id="disableIndukBetinaUmurBetina" class="mb-2">
                            <label for="indukBetina">Induk Betina</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control" id="indukBetina" placeholder="Masukkan Induk Betina">
                            </div>
                        </div>

                        <!-- Checkbox di atas label Umur Betina -->
                        <div class="form-group col-md-6">
                            <label for="umurBetina">Umur Betina</label>
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control" id="umurBetina" placeholder="Masukkan Umur Betina">
                            </div>
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




<!-- Modal for Adding New Kandang Data -->
<div class="modal fade" id="EditKandang" tabindex="-1" aria-labelledby="EditKandang" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputkandang">Edit Data Kandang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namaKandang">Nama Kandang</label>
                            <input type="text" class="form-control" id="namaKandang" placeholder="Masukkan Nama Kandang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="produksi">Produksi</label>
                            <input type="text" class="form-control" id="produksi" placeholder="Masukkan Produksi">
                        </div>
                    </div>

                    <!-- Checkbox untuk Induk Jantan dan Umur Jantan -->
                    <div class="form-row">
                        <!-- Checkbox di atas label Induk Jantan -->
                        <div class="form-group col-md-6">
                            <label for="indukJantan">Induk Jantan</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control" id="indukJantan" placeholder="Masukkan Induk Jantan">
                            </div>
                        </div>

                        <!-- Checkbox di atas label Umur Jantan -->
                        <div class="form-group col-md-6">
                            <label for="umurJantan">Umur Jantan</label>
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control" id="umurJantan" placeholder="Masukkan Umur Jantan">
                            </div>
                        </div>
                    </div>

                    <!-- Checkbox untuk Induk Betina dan Umur Betina -->
                    <div class="form-row">
                        <!-- Checkbox di atas label Induk Betina -->
                        <div class="form-group col-md-6">
                            <label for="indukBetina">Induk Betina</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control" id="indukBetina" placeholder="Masukkan Induk Betina">
                            </div>
                        </div>

                        <!-- Checkbox di atas label Umur Betina -->
                        <div class="form-group col-md-6">
                            <label for="umurBetina">Umur Betina</label>
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control" id="umurBetina" placeholder="Masukkan Umur Betina">
                            </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Checkbox untuk Induk Jantan dan Umur Jantan
        const disableIndukJantanUmurJantan = document.getElementById('disableIndukJantanUmurJantan');
        const indukJantan = document.getElementById('indukJantan');
        const umurJantan = document.getElementById('umurJantan');

        disableIndukJantanUmurJantan.addEventListener('change', function() {
            const isDisabled = disableIndukJantanUmurJantan.checked;
            indukJantan.disabled = isDisabled;
            umurJantan.disabled = isDisabled;
        });

        // Checkbox untuk Induk Betina dan Umur Betina
        const disableIndukBetinaUmurBetina = document.getElementById('disableIndukBetinaUmurBetina');
        const indukBetina = document.getElementById('indukBetina');
        const umurBetina = document.getElementById('umurBetina');

        disableIndukBetinaUmurBetina.addEventListener('change', function() {
            const isDisabled = disableIndukBetinaUmurBetina.checked;
            indukBetina.disabled = isDisabled;
            umurBetina.disabled = isDisabled;
        });
    });
</script>