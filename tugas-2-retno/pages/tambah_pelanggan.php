<?php
    require_once "config.php";
    
    $golongan = new App\Golongan();
    $data_golongan = $golongan->index();

    $user = new App\Pengguna();
    $data_user = $user->index();

    if (isset($_POST['simpan'])) {
        $pelanggan = new App\Pelanggan();
        $rows = $pelanggan->insert();
        header("location:index.php?page=index_pelanggan");
    }
?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Pelanggan</h5></div>
            <p class="card-text">
            <form method="POST">
                <div class="form-group">
                    <label for="">Golongan</label>
                    <select name="golongan_id" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <?php foreach($data_golongan as $item) { ?>
                        <option value="<?php echo $item['id'] ?>">
                            <?php echo $item['gol_kode'] ?> - <?php echo $item['gol_nama'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">User</label>
                    <select name="user_id" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <?php foreach($data_user as $item) { ?>
                        <option value="<?php echo $item['id'] ?>">
                            <?php echo $item['user_email'] ?> - <?php echo $item['user_nama'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                  <label for="">Nama</label>
                  <input type="text" name="pel_nama" class="form-control">
                </div>
                <div class="form-group mt-2 mt-2">
                  <label for="">Nomor</label>
                  <input type="text" name="pel_no" class="form-control">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">KTP</label>
                    <input type="number" class="form-control" name="pel_ktp">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Seri</label>
                    <input type="text" class="form-control" name="pel_seri">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Meteran</label>
                    <input type="text" class="form-control" name="pel_meteran">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Status</label>
                    <select name="pel_aktif" class="form-control" id="">
                        <option value="">-Silahkan Pilih-</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
        
    </div>
</div>