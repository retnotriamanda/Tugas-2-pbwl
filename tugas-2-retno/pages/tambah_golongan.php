<?php
    require_once "config.php";

    if (isset($_POST['simpan'])) {
        $golongan = new App\Golongan();
        $rows = $golongan->insert();
        header("location:index.php?page=index_golongan");
    }
?>

<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="col-md-12">
        <div class="card text-left" style="width: 600px">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Data Golongan</h4>
            <p class="card-text">
                <form method="POST">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" class="form-control" name="gol_nama">
                    </div>
                    <div class="form-group mt-4">
                      <label for="">Kode</label>
                      <input type="text" class="form-control" name="gol_kode">
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
        </div>
    </div>
  
</div>