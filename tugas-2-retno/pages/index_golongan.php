<?php
    require_once "config.php";

    $golongan = new App\Golongan();
    $rows = $golongan->index();

    if (isset($_POST['hapus'])) {
        $golongan->delete();
        header("location:index.php?page=index_golongan");
    }
?>

<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Golongan</h5></div>
            <div class="card-text">
                <a href="index.php?page=tambah_golongan">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['gol_kode'] ?></td>
                            <td><?php echo $row['gol_nama'] ?></td>
                            <td style="width: 25%">
                            <a href="index.php?page=edit_golongan&id=<?php echo $row['id']?>">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            <form method="POST" style="display: inline">
                                <input type="text" name="id" value="<?php echo $row['id'] ?>" style="display:none">
                                <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>