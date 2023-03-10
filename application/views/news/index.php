<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- partial -->
            <section class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->session->flashdata('demo') or $this->session->flashdata('hapus')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('demo'); ?>
                                <?php echo $this->session->flashdata('hapus'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('ubah') or $this->session->flashdata('tambah')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('ubah'); ?>
                                <?php echo $this->session->flashdata('tambah'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="tab-minimal tab-minimal-success">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-2-1" data-toggle="tab" href="#ride-2-1" role="tab" aria-controls="ride-2-1" aria-selected="true">
                                        Berita
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-2-2" data-toggle="tab" href="#car-2-2" role="tab" aria-controls="car-2-2" aria-selected="false">
                                        Kategori
                                    </a>
                                </li>
                            </ul>


                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="ride-2-1" s="s" role="tabpanel" aria-labelledby="tab-2-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <a class="btn btn-info" href="<?= base_url(); ?>news/tambah"><i class="mdi mdi-plus-circle-outline"></i>Tambah Berita</a>
                                            </div>
                                            <br>
                                            <h4 class="card-title">Berita</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="order-listing" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Gambar</th>
                                                                    <th>Judul</th>
                                                                    <th>Dibuat</th>
                                                                    <th>Kategori</th>
                                                                    <th>Status</th>
                                                                    <th>Tindakan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($news as $nw) { ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td>
                                                                            <img class="round" style="width: 40px; height: 40px;" src="<?= base_url('images/berita/') . $nw['foto_berita']; ?>">
                                                                            
                                                                        </td>
                                                                        <td><?= $nw['title']; ?></td>
                                                                        <td><?= $nw['created_berita']; ?></td>
                                                                        <td><?= $nw['kategori']; ?></td>
                                                                        <td>
                                                                            <?php if ($nw['status_berita'] == 1) { ?>
                                                                                <label class="badge badge-success">Aktif</label>
                                                                            <?php } else { ?>
                                                                                <label class="badge badge-danger">Non Aktif</label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>news/ubah/<?= $nw['id_berita']; ?>">
                                                                                <button class="btn btn-outline-primary">Ubah</button>
                                                                            </a>
                                                                            <a href="<?= base_url(); ?>news/hapus/<?= $nw['id_berita']; ?>" onclick="return confirm ('are you sure?')">
                                                                                <button class="btn btn-outline-danger">Hapus</button>
                                                                            </a>
                                                                        </td>
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







                                <div class="tab-pane fade" id="car-2-2" role="tabpanel" aria-labelledby="tab-2-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                <a class="btn btn-info" href="<?= base_url(); ?>news/tambahcategory"><i class="mdi mdi-plus-circle-outline"></i>Tambah Kategori</a>
                                            </div>
                                            <br>
                                            <h4 class="card-title">Kategori Berita</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="order-listing1" class="table">
                                                            <thead>
                                                                <tr>

                                                                    <th>No.</th>
                                                                    <th>Kategori</th>
                                                                    <th>Dibuat</th>
                                                                    <th>Tindakan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($kategori as $knw) { ?>
                                                                    <tr>
                                                                        <td><?= $i ?></td>
                                                                        <td><?= $knw['kategori']; ?></td>
                                                                        <td><?= $knw['created']; ?></td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>news/hapuscategory/<?= $knw['id_kategori_news']; ?>"><button class="btn btn-outline-danger">Hapus</button></a>
                                                                        </td>
                                                                    <?php $i++;
                                                                } ?>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content-wrapper ends -->
        </div>
    </div>
</div>