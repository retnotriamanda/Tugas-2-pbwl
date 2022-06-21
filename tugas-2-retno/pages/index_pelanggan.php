<?php
    require_once "config.php";

    $pelanggan = new App\Pelanggan();
    $rows = $pelanggan->index();

    if (isset($_POST['hapus'])) {
        $pelanggan->delete();
        header("location:index.php?page=index_pelanggan");
    }
?>

<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Pelanggan</h5>
                </div>
                <a href="index.php?page=tambah_pelanggan">
                    <button class="btn btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Nama Golongan</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>KTP</th>
                        <th>Seri</th>
                        <th>Meteran</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach ($rows as $row) { ?>
                    <?php
                        $golongan = $pelanggan->getGolongan($row['golongan_id']);    
                        $user = $pelanggan->getUser($row['user_id']);    
                    ?>
                    <tr>
                        <td><?php echo $golongan ?></td>
                        <td><?php echo $row['pel_nama'] ?></td>
                        <td><?php echo $row['pel_no'] ?></td>
                        <td><?php echo $row['pel_ktp'] ?></td>
                        <td><?php echo $row['pel_seri'] ?></td>
                        <td><?php echo $row['pel_meteran'] ?></td>
                        <td><?php echo $user ?></td>
                        <td>
                            <?php if ($row['pel_aktif'] == 0) { ?>
                                <span class="badge bg-primary">
                                    Aktif
                                </span>
                            <?php } else{ ?>
                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>
                            <?php } ?>
                        </td>
                        <td style="width: 25%">
                        <a href="index.php?page=edit_pelanggan&id=<?php echo $row['id']?>">
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