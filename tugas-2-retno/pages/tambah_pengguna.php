<?php
    require_once "config.php";

    if (isset($_POST['simpan'])) {
        $pengguna = new App\Pengguna();
        $rows = $pengguna->insert();
        header("location:index.php?page=index_pengguna");
    }
?>

<div class="container" style="padding-top: 40px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form method="POST">
                    <div class="form-group mt-2 ">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="user_email">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="user_nama">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="user_alamat">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">User Pos</label>
                        <input type="text" class="form-control" name="user_pos">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">NO. HP</label>
                        <input type="text" class="form-control" name="user_hp">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">User Role</label>
                        <select name="user_role" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1">Admin</option>
                            <option value="0">Pelanggan</option>
                        </select>
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Status</label>
                        <select name="user_aktif" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>