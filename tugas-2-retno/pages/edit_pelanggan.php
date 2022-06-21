<?php
    require_once "config.php";
    $golongan = new App\Golongan();
    $data_golongan = $golongan->index();

    $user = new App\Pengguna();
    $data_user = $user->index();

    $pelanggan = new App\Pelanggan();
    $row = $pelanggan->edit($_GET['id']);

    if (isset($_POST['simpan'])) {
        $pelanggan->update($_GET['id']);
        header("location:index.php?page=index_pelanggan");
    }
?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
        <div class="card-title"><h5>Data Pelanggan</h5></div>
        <p class="card-text">
            <form method="POST">
                <div class="form-group mt-2">
                    <label for="">Golongan</label>
                    <select name="golongan_id" class="form-control" id="">
                        <option value="">-Silahkan Pilih-</option>
                        <?php foreach($data_golongan as $item) { ?>
                        <option value="<?php echo $item['id'] ?>"
                            <?php if ($item['id'] == $row['golongan_id']) { ?>
                                selected
                            <?php } ?>
                        >
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
                        <option value="<?php echo $item['id'] ?>"
                            <?php if ($item['id'] == $row['user_id']) { ?>
                                selected
                            <?php } ?>
                        >
                            <?php echo $item['user_email'] ?> - <?php echo $item['user_nama'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">No Pelanggan</label>
                    <input type="text" name="pel_no" class="form-control" value="<?php echo $row['pel_no'] ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Nama</label>
                    <input type="text" name="pel_nama" class="form-control" value="<?php echo $row['pel_nama'] ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">KTP</label>
                    <input type="number" name="pel_ktp" class="form-control" value="<?php echo $row['pel_ktp'] ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Seri</label>
                    <input type="text" name="pel_seri" class="form-control" value="<?php echo $row['pel_seri'] ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Meteran</label>
                    <input type="text" name="pel_meteran" class="form-control" value="<?php echo $row['pel_meteran'] ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Status</label>
                    <select name="pel_aktif" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option value="1"
                        <?php if ($row['pel_aktif'] == 1) { ?>
                            selected
                        <?php } ?>
                        >Aktif</option>
                        <option value="0"
                        <?php if ($row['pel_aktif'] == 0) { ?>
                            selected
                        <?php } ?>
                        >Tidak Aktif</option>
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