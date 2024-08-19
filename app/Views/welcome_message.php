<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Data Kandang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Input Data Kandang</div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaKandang">Nama Kandang</label>
                                <input type="text" name="namaKandang" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="produksi">Produksi</label>
                                <input type="text" name="produksi" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukJantan">Induk Jantan</label>
                                <input type="text" name="indukJantan" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="umurJantan">Umur Jantan</label>
                                <input type="number" name="umurJantan" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="indukBetina">Induk Betina</label>
                                <input type="text" name="indukBetina" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="umurBetina">Umur Betina</label>
                                <input type="number" name="umurBetina" class="form-control">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
