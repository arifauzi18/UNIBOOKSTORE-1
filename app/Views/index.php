<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title"> Tabel Buku </h4>

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

            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <h4>Periksa lagi isian</h4>
                    <ul>
                        <?php foreach ($errors as $key => $erorr) { ?>
                            <li>
                                <?= esc($erorr) ?>
                            </li>
                        <?php } ?>
                    </ul>
                    </h5>
                </div>
            <?php } ?>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th width=50px>No</th>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($buku as $value):
                        ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++ ?>
                            </td>
                            <td class="text-center">
                                <?= $value['Id_buku'] ?>
                            </td>
                            <td class="text-center">
                                <?= $value['Kategori'] ?>
                            </td>
                            <td class="text-center">
                                <?= $value['Nama_buku'] ?>
                            </td>
                            <td class="text-center">Rp.
                                <?= number_format($value['Harga'], 0); ?>
                            </td>
                            <td class="text-center">
                                <?= $value['Stok'] ?>
                            </td>
                            <td class="text-center">
                                <?= $value['Penerbit'] ?>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"
                                    data-target="#ubah-data<?= $value['id']; ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal"
                                    data-target="#hapus-data<?= $value['id']; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>

    </div>

    <div class="container pt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: ;">Tabel Penerbit</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width=50px>No.</th>
                                <th>ID Penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($buku as $value) { ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $value['id_buku'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $value['Kategori'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $value['Nama_buku'] ?>
                                    </td>
                                    <td class="text-center">Rp.
                                        <?= number_format($value['Harga'], 0); ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $value['Stok'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $value['Penerbit'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('Buku/ubahdata/' . $value['id']); ?>" class="btn btn-success"
                                            data-target="#editModal">
                                            Edit</a>
                                        <a href="<?= base_url('Buku/hapusdata/' . $value['id']); ?>"
                                            onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data karyawan?')"
                                            class="btn btn-danger">
                                            Hapus</a>
                                    </td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>