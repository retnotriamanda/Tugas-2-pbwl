<?php
    require_once "config.php";

    $pengguna = new App\Pengguna();
    $row = $pengguna->edit($_GET['id']);

    if (isset($_POST['simpan'])) {
        $rows = $pengguna->update($_GET['id']);
        header("location:index.php?page=index_pengguna");
    }
?>

<div class="container" style="padding-top: 40px; padding-bottom: 40px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form method="POST">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php echo $row['user_email'] ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="user_nama" value="<?php echo $row['user_nama'] ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="user_alamat" value="<?php echo $row['user_alamat'] ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. Pos</label>
                        <input type="text" class="form-control" name="user_pos" value="<?php echo $row['user_pos'] ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. HP</label>
                        <input type="text" class="form-control" name="user_hp" value="<?php echo $row['user_hp'] ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Status</label>
                        <select name="user_aktif" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            <?php if ($row['user_aktif'] == 0) { ?>
                                selected
                            <?php } ?>
                            >Aktif</option>
                            <option value="0"
                            <?php if ($row['user_aktif'] == 1) { ?>
                                selected
                            <?php } ?>
                            >Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">User Role</label>
                        <select name="user_role" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            <?php if ($row['user_role'] == 1) { ?>
                                selected
                            <?php } ?>
                            >Admin</option>
                            <option value="0"
                            <?php if ($row['user_role'] == 0) { ?>
                                selected
                            <?php } ?>
                            >Pelanggan</option>
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