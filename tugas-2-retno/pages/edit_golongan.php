<?php
    require_once "config.php";

    $golongan = new App\Golongan();
    $row = $golongan->edit($_GET['id']);

    if (isset($_POST['simpan'])) {
        $rows = $golongan->update($_GET['id']);
        header("location:index.php?page=index_golongan");
    }
?>

<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Golongan</h5></div>
            <p class="card-text">
            <form method="POST">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="gol_nama" value="<?php echo $row['gol_nama'] ?>">
                </div>
                <div class="form-group mt-4">
                  <label for="">Kode</label>
                  <input type="text" class="form-control" name="gol_kode" value="<?php echo $row['gol_kode'] ?>">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
    </div>
</div>