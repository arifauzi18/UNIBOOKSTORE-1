<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Data Buku<?= $subjudul; ?> </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i class="fas fa-plus"></i>Tambah Data</i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5>
                </div>';
            }
            ?>
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                    <td> ID Buku </td>
        <td> Kategori </td>
        <td> Nama Buku </td>
        <td> Harga </td>
        <td> Stok </td>
        <td> Penerbit </td>
        <td> AKSI </td>
        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $value) :?>
                        <tr>
                        <td> <?= $value['Id_buku'] ?> </td>
        <td> <?= $value['Kategori'] ?> </td>
        <td> <?= $value['Nama_buku'] ?> </td>
        <td> <?= $value['Harga'] ?> </td>
        <td> <?= $value['Stok'] ?> </td>
        <td> <?= $value['Penerbit'] ?> </td>
        <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#ubah-data<?= $value['Id_buku']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-data<?= $value['Id_buku']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/tambah')?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Buku">ID Buku</label>
                    <input type="text" name="Id_buku" id="Id_buku" class="form-control" placeholder="Masukan ID Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Kategori">Kategori</label>
                    <input type="text" name="Kategori" id="Kategori" class="form-control" placeholder="Masukan Kategori Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Buku">Nama Buku</label>
                    <input type="text" name="Nama_buku" id="Nama_buku" class="form-control" placeholder="Masukan Nama Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Harga">Harga</label>
                    <input type="text" name="Harga" id="Harga" class="form-control" placeholder="Masukan Harga">
                </div>
                <div class="form-group mb-0">
                    <label for="Stok">Stok</label>
                    <input type="text" name="Stok" id="Stok" class="form-control" placeholder="Masukan Stok">
                </div>
                <div class="form-group mb-0">
                    <label for="Penerbit">Penerbit</label>
                    <input type="text" name="Penerbit" id="Penerbit" class="form-control" placeholder="Masukan Penerbit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Simpan data</button>
            </div>
        </form>
        </div>
        </div>
        </div>

        <?php foreach ($buku as $value) : ?>
        <div class="modal fade" id="ubah-data<?= $value['Id_buku']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/ubah/' . $value['Id_buku'])?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Buku">ID Buku</label>
                    <input type="text" name="Id_buku" id="Id_buku" value="<?= $value['Id_buku']; ?>" class="form-control" placeholder="Masukan ID Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Kategori">Kategori</label>
                    <input type="text" name="Kategori" id="Kategori" value="<?= $value['Kategori']; ?>" class="form-control" placeholder="Masukan Kategori Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Buku">Nama Buku</label>
                    <input type="text" name="Nama_buku" id="Nama_buku" value="<?= $value['Nama_buku']; ?>" class="form-control" placeholder="Masukan Nama Buku">
                </div>
                <div class="form-group mb-0">
                    <label for="Harga">Harga</label>
                    <input type="text" name="Harga" id="Harga" value="<?= $value['Harga']; ?>" class="form-control" placeholder="Masukan Harga">
                </div>
                <div class="form-group mb-0">
                    <label for="Stok">Stok</label>
                    <input type="text" name="Stok" id="Stok" value="<?= $value['Stok']; ?>" class="form-control" placeholder="Masukan Stok">
                </div>
                <div class="form-group mb-0">
                    <label for="Penerbit">Penerbit</label>
                    <input type="text" name="Penerbit" id="Penerbit" value="<?= $value['Penerbit']; ?>" class="form-control" placeholder="Masukan Penerbit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Ubah data</button>
            </div>
        </form>
        </div>
        </div>
        </div>
        <?php endforeach ?>

        <!-- /.modal-HapusData -->
<?php foreach ($buku as $value) : ?>
    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapus-data<?= $value['Id_buku']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data <?= $subjudul; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan menghapus <?= $value['Nama_buku']; ?>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Admin/hapus/' . $value['Id_buku']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach; ?>


<!-- Data Penerbit -->

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Data Penerbit<?= $subjudul; ?> </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-datap"><i class="fas fa-plus"></i>Tambah Data</i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesanp')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('pesanp');
                echo '</h5>
                </div>';
            }
            ?>
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr class="text-center">
                    <td> ID Penerbit </td>
        <td> Nama </td>
        <td> Alamat </td>
        <td> Kota </td>
        <td> Telepon </td>
        <td> AKSI </td>
        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penerbit as $value) :?>
                        <tr>
        <td> <?= $value['Id_penerbit'] ?> </td>
        <td> <?= $value['Nama'] ?> </td>
        <td> <?= $value['Alamat'] ?> </td>
        <td> <?= $value['Kota'] ?> </td>
        <td> <?= $value['Telepon'] ?> </td>
        <td>
        <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#ubah-datap<?= $value["Id_penerbit"]; ?>"><i class="fas fa-pencil-alt"></i></button>
        <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-datap<?= $value["Id_penerbit"]; ?>"><i class="fas fa-trash"></i></button>
        </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah-datap">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/tambahp')?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Penerbit">ID Penerbit</label>
                    <input type="text" name="Id_penerbit" id="Id_penerbit" class="form-control" placeholder="Masukan ID Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Penerbit">Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukan Nama Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="form-group mb-0">
                    <label for="Kota">Kota</label>
                    <input type="text" name="Kota" id="Kota" class="form-control" placeholder="Masukan Kota">
                </div>
                <div class="form-group mb-0">
                    <label for="Telepon">Telepon</label>
                    <input type="text" name="Telepon" id="Telepon" class="form-control" placeholder="Masukan Telepon">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Simpan data</button>
            </div>
        </form>
        </div>
        </div>
        </div>

        <?php foreach ($penerbit as $value) : ?>
        <div class="modal fade" id="ubah-datap<?= $value['Id_penerbit']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Data <?= $subjudul; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Admin/ubahp/' . $value['Nama'])?>" method="POST">
                <div class="form-group mb-0">
                    <label for="ID Penerbit">ID Penerbit</label>
                    <input type="text" name="Id_penerbit" id="Id_penerbit" value="<?= $value['Id_penerbit']; ?>" class="form-control" placeholder="Masukan ID Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Nama Penerbit">Nama </label>
                    <input type="text" name="Nama" id="Nama" value="<?= $value['Nama']; ?>" class="form-control" placeholder="Masukan Nama Penerbit">
                </div>
                <div class="form-group mb-0">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="Alamat" id="Alamat" value="<?= $value['Alamat']; ?>" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="form-group mb-0">
                    <label for="Kota">Kota</label>
                    <input type="text" name="Kota" id="Kota" value="<?= $value['Kota']; ?>" class="form-control" placeholder="Masukan Kota">
                </div>
                <div class="form-group mb-0">
                    <label for="Telepon">Telepon</label>
                    <input type="text" name="Telepon" id="Telepon" value="<?= $value['Telepon']; ?>" class="form-control" placeholder="Masukan Telepon">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">close</button>
                <button type="submit">Ubah data</button>
            </div>
        </form>
        </div>
        </div>
        </div>
        <?php endforeach ?>

        <!-- /.modal-HapusData -->
<?php foreach ($penerbit as $value) : ?>
    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapus-datap<?= $value['Id_penerbit']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data <?= $subjudul; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan meenghapus <?= $value['Nama']; ?>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Admin/hapusp/' . $value['Nama']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach; ?>
            