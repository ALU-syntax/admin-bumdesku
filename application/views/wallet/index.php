<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- partial -->
            <section class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-diamond icon-lg text-success"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Penghasilan</p>
                                        <?php
                                        $walletvalue = $topup['total'] - $withdraw['total'] - ($ordermin['total'] - $orderplus['total']);
                                        $apprevenue = ($ordermin['total'] - $orderplus['total']) - $jumlahdiskon['diskon'];
                                        ?>
                                        <h3><?= $currency['duit'] ?>
                                            <?= number_format($apprevenue , 0, ".", ".") ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-rotate-3d icon-lg text-success"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Jumlah Saldo Saat Ini</p>
                                        <?php
                                        $walletvalue = $topup['total'] - $withdraw['total'] - ($ordermin['total'] - $orderplus['total']);
                                        ?>
                                        <h3><?= $currency['duit'] ?>
                                            <?= number_format($walletvalue , 0, ".", ".") ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-ticket-percent icon-lg text-danger"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Diskon Saat</p>
                                        <?php
                                        $walletvalue = $topup['total'] - $withdraw['total'] - ($ordermin['total'] - $orderplus['total']);
                                        ?>
                                        <h3><?= $currency['duit'] ?>
                                            <?= number_format($jumlahdiskon['diskon'] , 0, ".", ".") ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-import icon-lg text-primary"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Jumlah topup saat ini</p>
                                        <h6><?= $currency['duit'] ?>
                                            <?= number_format($topup['total'] , 0, ".", ".") ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-export icon-lg text-danger"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Jumlah penarikan saat ini</p>
                                        <h6><?= $currency['duit'] ?>
                                            <?= number_format($withdraw['total'] , 0, ".", ".") ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="mdi mdi-motorbike icon-lg text-info"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Jumlah transaksi saat ini</p>
                                        <span class="mr-2 font-weight-bold">
                                            <i class="badge badge-success mr-1">IN</i><?= $currency['duit'] ?>
                                            <?= number_format($orderplus['total'], 0, ".", ".") ?></span>
                                        <span class="font-weight-bold">
                                            <i class="badge badge-danger mr-1">OUT</i><?= $currency['duit'] ?>
                                            <?= number_format($ordermin['total'], 0, ".", ".") ?>
                                            <i></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php if ($this->session->flashdata()) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('ubah'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="tab-minimal tab-minimal-success">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab-2-1" data-toggle="tab" href="#allwallet-2-1" role="tab" aria-controls="allwallet-2-1" aria-selected="true">
                                                <i class="mdi mdi-rotate-3d"></i>Semua Saldo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-2-2" data-toggle="tab" href="#topup-2-2" role="tab" aria-controls="topup-2-2" aria-selected="false">
                                                <i class="mdi mdi-import"></i>Topup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-2-3" data-toggle="tab" href="#withdraw-2-3" role="tab" aria-controls="withdraw-2-3" aria-selected="false">
                                                <i class="mdi mdi-export"></i>Withdraw</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab-2-4" data-toggle="tab" href="#transaction-2-4" role="tab" aria-controls="transaction-2-4" aria-selected="false">
                                                <i class="mdi mdi-motorbike"></i>Transaksi</a>
                                        </li>
                                    </ul>
                                    </ul>
                                    <div class="tab-content">

                                        <!-- all wallet -->
                                        <div class="tab-pane fade show active" id="allwallet-2-1" role="tabpanel" aria-labelledby="tab-2-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Semua Saldo</h4>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="order-listing" class="table dataex-html5-selectors">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Invoice</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Driver/Users</th>
                                                                            <th>Nama</th>
                                                                            <th>Jumlah</th>
                                                                            <th>Tipe</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1;
                                                                        foreach ($wallet as $wlt) { ?>
                                                                            <tr>
                                                                                <td><?= $i ?></td>
                                                                                <td><?= $wlt['id'] ?></td>
                                                                                <td><?= $wlt['waktu'] ?></td>

                                                                                <?php $caracter = substr($wlt['id_user'], 0, 1);
                                                                                if ($caracter == 'P') { ?>
                                                                                    <td class="text-primary">User</td>
                                                                                <?php } elseif ($caracter == 'M') { ?>
                                                                                    <td class="text-success">Merchant</td>
                                                                                <?php } else { ?>
                                                                                    <td class="text-warning">Driver</td>

                                                                                <?php } ?>

                                                                                <td><?= $wlt['nama_driver'] ?><?= $wlt['fullnama'] ?><?= $wlt['nama_mitra'] ?></td>
                                                                                <?php if ($wlt['type'] == 'topup' or $wlt['type'] == 'Order+') { ?>
                                                                                    <td class="text-success">
                                                                                        <?= $currency['duit'] ?>
                                                                                        <?= number_format($wlt['jumlah'] , 0, ".", ".") ?>
                                                                                    </td>

                                                                                <?php } else { ?>
                                                                                    <td class="text-danger">
                                                                                        <?= $currency['duit'] ?>
                                                                                        <?= number_format($wlt['jumlah'] , 0, ".", ".") ?>
                                                                                    </td>
                                                                                <?php } ?>



                                                                                <?php if ($wlt['type'] == 'topup' or $wlt['type'] == 'Order+') { ?>
                                                                                    <td>
                                                                                        <label class="badge badge-outline-success"><?= $wlt['type'] ?></label>
                                                                                    </td>
                                                                                <?php } else { ?>
                                                                                    <td>
                                                                                        <label class="badge badge-outline-danger"><?= $wlt['type'] ?></label>
                                                                                    </td>
                                                                                <?php } ?>

                                                                                <?php if ($wlt['status'] == '0') { ?>
                                                                                    <td>
                                                                                        <label class="badge badge-secondary text-dark">Pending</label>
                                                                                    </td>
                                                                                <?php }
                                                                                if ($wlt['status'] == '1') { ?>
                                                                                    <td>
                                                                                        <label class="badge badge-success">Sukses</label>
                                                                                    </td>
                                                                                <?php }
                                                                                if ($wlt['status'] == '2') { ?>
                                                                                    <td>
                                                                                        <label class="badge badge-danger">Batal</label>
                                                                                    </td>
                                                                                <?php } ?>
                                                                            </tr>
                                                                        <?php $i++;
                                                                        } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of all wallet -->

                                        <!-- top up -->
                                        <div class="tab-pane fade" id="topup-2-2" role="tabpanel" aria-labelledby="tab-2-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <a class="btn btn-info" href="<?= base_url(); ?>wallet/tambahtopup"><i class="mdi mdi-plus-circle-outline"></i>Tambahkan Topup</a>
                                                    </div>
                                                    <br>
                                                    <h4 class="card-title">Semua TopUp</h4>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="order-listing1" class="table dataex-html5-selectors">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Invoice</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Driver/User</th>
                                                                            <th>Nama</th>
                                                                            <th>Jumlah</th>
                                                                            <th>Bank</th>
                                                                            <th>Nama Akun</th>
                                                                            <th>Nomor rekening</th>
                                                                            <th>Status</th>
                                                                            <th>Tindakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1;
                                                                        foreach ($wallet as $wlt) {
                                                                            if ($wlt['type'] == 'topup') { ?>
                                                                                <tr>
                                                                                    <td><?= $i ?></td>
                                                                                    <td><?= $wlt['id'] ?></td>
                                                                                    <td><?= $wlt['waktu'] ?></td>

                                                                                    <?php $caracter = substr($wlt['id_user'], 0, 1);
                                                                                    if ($caracter == 'P') { ?>
                                                                                        <td class="text-primary">User</td>
                                                                                    <?php } elseif ($caracter == 'M') { ?>
                                                                                        <td class="text-success">Merchant</td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-warning">Driver</td>

                                                                                    <?php } ?>

                                                                                    <td><?= $wlt['nama_driver'] ?><?= $wlt['fullnama'] ?><?= $wlt['nama_mitra'] ?></td>
                                                                                    <td class="text-success"><?= $currency['duit'] ?>
                                                                                        <?= number_format($wlt['jumlah'], 0, ".", ".") ?></td>
                                                                                    <td><?= $wlt['bank'] ?></td>
                                                                                    <td><?= $wlt['nama_pemilik'] ?></td>
                                                                                    <?php if ($wlt['bank'] == 'QRIS') { ?>
                                                                                        <td>"QR CODE"</td>
                                                                                    <?php } else { ?>
                                                                                        <td><?= $wlt['rekening'] ?></td>
                                                                                    <?php } ?>
                                                                                    <?php if ($wlt['status'] == '0') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-secondary text-dark">Pending</label>
                                                                                        </td>
                                                                                    <?php }
                                                                                    if ($wlt['status'] == '1') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-success">Sukses</label>
                                                                                        </td>
                                                                                    <?php }
                                                                                    if ($wlt['status'] == '2') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-danger">Batalkan</label>
                                                                                        </td>
                                                                                    <?php } ?>
                                                                                    <td>
                                                                                        <?php if ($wlt['status'] == '0') { ?>
                                                                                            <a href="<?= base_url(); ?>wallet/tconfirm/<?= $wlt['id'] ?>/<?= $wlt['id_user'] ?>/<?= $wlt['jumlah'] ?>">
                                                                                                <button class="btn btn-outline-primary">Konfirmasi</button></a>
                                                                                            <a href="<?= base_url(); ?>wallet/tcancel/<?= $wlt['id'] ?>/<?= $wlt['id_user'] ?>">
                                                                                                <button onclick="return confirm ('Are You Sure?')" class="btn btn-outline-danger">Batal</button></a>
                                                                                        <?php } else { ?>
                                                                                            <span class="btn btn-outline-muted">Selesai</span>
                                                                                        <?php } ?>

                                                                                    </td>
                                                                                </tr>
                                                                        <?php $i++;
                                                                            }
                                                                        } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of top up -->

                                        <!-- withdraw -->
                                        <div class="tab-pane fade" id="withdraw-2-3" role="tabpanel" aria-labelledby="tab-2-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div>
                                                        <a class="btn btn-info" href="<?= base_url(); ?>wallet/tambahwithdraw"><i class="mdi mdi-plus-circle-outline"></i>Tambahkan Withdraw</a>
                                                    </div>
                                                    <br>
                                                    <h4 class="card-title">Semua Withdraw</h4>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="order-listing2" class="table dataex-html5-selectors">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Invoice</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Driver/Users</th>
                                                                            <th>Nama</th>
                                                                            <th>Jumlah</th>
                                                                            <th>Bank</th>
                                                                            <th>Nama akun</th>
                                                                            <th>Nomor rekening</th>
                                                                            <th>Status</th>
                                                                            <th>Tindakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1;
                                                                        foreach ($wallet as $wlt) {
                                                                            if ($wlt['type'] == 'withdraw') { ?>
                                                                                <tr>
                                                                                    <td><?= $i ?></td>
                                                                                    <td><?= $wlt['id'] ?></td>
                                                                                    <td><?= $wlt['waktu'] ?></td>

                                                                                    <?php $caracter = substr($wlt['id_user'], 0, 1);
                                                                                    if ($caracter == 'P') { ?>
                                                                                        <td class="text-primary">User</td>
                                                                                    <?php } elseif ($caracter == 'M') { ?>
                                                                                        <td class="text-success">Merchant</td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-warning">Driver</td>

                                                                                    <?php } ?>

                                                                                    <td><?= $wlt['nama_driver'] ?><?= $wlt['fullnama'] ?><?= $wlt['nama_mitra'] ?></td>

                                                                                    <td class="text-danger"><?= $currency['duit'] ?>
                                                                                        <?= number_format($wlt['jumlah'] , 0, ".", ".") ?></td>
                                                                                    <td><?= $wlt['bank'] ?></td>
                                                                                    <td><?= $wlt['nama_pemilik'] ?></td>
                                                                                    <?php if ($wlt['bank'] == 'QRIS') { ?>
                                                                                        <td>"QR CODE"</td>
                                                                                    <?php } else { ?>
                                                                                        <td><?= $wlt['rekening'] ?></td>
                                                                                    <?php } ?>
                                                                                    <?php if ($wlt['status'] == '0') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-secondary text-dark">Pending</label>
                                                                                        </td>
                                                                                    <?php }
                                                                                    if ($wlt['status'] == '1') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-success">Sukses</label>
                                                                                        </td>
                                                                                    <?php }
                                                                                    if ($wlt['status'] == '2') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-danger">Batal</label>
                                                                                        </td>
                                                                                    <?php } ?>



                                                                                    <td>
                                                                                        <?php if ($wlt['status'] == '0') { ?>
                                                                                            <a href="<?= base_url(); ?>wallet/wconfirm/<?= $wlt['id'] ?>/<?= $wlt['id_user'] ?>/<?= $wlt['jumlah'] ?>">
                                                                                                <button class="btn btn-outline-primary">Confirm</button></a>
                                                                                            <a href="<?= base_url(); ?>wallet/wcancel/<?= $wlt['id'] ?>/<?= $wlt['id_user'] ?>">
                                                                                                <button onclick="return confirm ('Are You Sure?')" class="btn btn-outline-danger">Cancel</button></a>
                                                                                        <?php } else { ?>
                                                                                            <span class="btn btn-outline-muted">Completed</span>
                                                                                        <?php } ?>

                                                                                    </td>


                                                                                </tr>
                                                                        <?php $i++;
                                                                            }
                                                                        } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of withdraw -->

                                        <!-- transaction -->
                                        <div class="tab-pane fade" id="transaction-2-4" role="tabpanel" aria-labelledby="tab-2-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Semua Transaksi</h4>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table id="order-listing3" class="table dataex-html5-selectors">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Transaksi Inv</th>
                                                                            <th>Layanan</th>
                                                                            <th>Date</th>
                                                                            <th>Driver/Users</th>
                                                                            <th>Name</th>
                                                                            <th>Jumlah</th>
                                                                            <th>Tipe</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1;
                                                                        foreach ($wallet as $wlt) {
                                                                            if ($wlt['type'] == 'Order+' or $wlt['type'] == 'Order-') { ?>
                                                                                <tr>
                                                                                    <td><?= $i ?></td>
                                                                                    <td><?= $wlt['id'] ?></td>
                                                                                    <td><?= $wlt['bank'] ?></td>
                                                                                    <td><?= $wlt['waktu'] ?></td>

                                                                                    <?php $caracter = substr($wlt['id_user'], 0, 1);
                                                                                    if ($caracter == 'P') { ?>
                                                                                        <td class="text-primary">User</td>
                                                                                    <?php } elseif ($caracter == 'M') { ?>
                                                                                        <td class="text-success">Merchant</td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-warning">Driver</td>

                                                                                    <?php } ?>

                                                                                    <td><?= $wlt['nama_driver'] ?><?= $wlt['fullnama'] ?><?= $wlt['nama_mitra'] ?></td>

                                                                                    <?php if ($wlt['type'] == 'Order+') { ?>
                                                                                        <td class="text-success"><?= $currency['duit'] ?>
                                                                                            <?= number_format($wlt['jumlah'] , 0, ".", ".") ?></td>
                                                                                    <?php } else { ?>
                                                                                        <td class="text-danger"><?= $currency['duit'] ?>
                                                                                            <?= number_format($wlt['jumlah'] , 0, ".", ".") ?></td>
                                                                                    <?php } ?>

                                                                                    <?php if ($wlt['type'] == 'Order+') { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-primary">IN</label>
                                                                                        </td>
                                                                                    <?php } else { ?>
                                                                                        <td>
                                                                                            <label class="badge badge-danger">OUT</label>
                                                                                        </td>
                                                                                    <?php } ?>
                                                                                </tr>
                                                                        <?php $i++;
                                                                            }
                                                                        } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of transaction -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>