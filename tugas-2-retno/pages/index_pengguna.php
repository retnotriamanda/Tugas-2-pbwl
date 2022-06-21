<?php
    require_once "config.php";

    $pengguna = new App\Pengguna();
    $rows = $pengguna->index();

    if (isset($_POST['hapus'])) {
        $pengguna->delete();
        header("location:index.php?page=index_pengguna");
    }
?>

<div class="container" style="padding-top: 40px; padding-bottom:40px; min-height: 600px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <a href="index.php?page=tambah_pengguna">
                    <button class="btn btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-striped">
                    <tr>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>No Pos</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach ($rows as $row) { ?>
                    <tr>
                        <td><?php echo $row['user_email'] ?></td>
                        <td><?php echo $row['user_nama'] ?></td>
                        <td><?php echo $row['user_alamat'] ?></td>
                        <td><?php echo $row['user_hp'] ?></td>
                        <td><?php echo $row['user_pos'] ?></td>
                        <td>
                            <?php if ($row['user_role'] == 0) { ?>
                                <span class="badge bg-primary">
                                    Admin
                                </span>
                            <?php } else{ ?>
                                <span class="badge bg-secondary">
                                    Pelanggan
                                </span>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($row['user_aktif'] == 0) { ?>
                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>
                            <?php } else{ ?>
                                <span class="badge bg-secondary">
                                    Aktif
                                </span>
                            <?php } ?>
                        </td>
                        <td style="width: 25%">
                            <a href="index.php?page=edit_pengguna&id=<?php echo $row['id']?>">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form method="POST" style="display: inline">
                                <input type="text" name="id" value="<?php echo $row['id'] ?>" style="display:none">
                                <button class="btn btn-danger" name="hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </p>
        </div>
    </div>
</div>