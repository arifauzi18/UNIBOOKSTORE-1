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
                            
                        </tr>
                        <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>

    </div>

    
    </div>