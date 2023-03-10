<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-thumb-view" class="data-thumb-view-header">

                <div class="card-header">
                    <h4>Iklan Slider <span><a class="btn btn-success float-right mb-1 text-white" href="<?= base_url(); ?>promoslider/tambah">
                                <i class="feather icon-plus mr-1"></i>Tambah Iklan Slider</a></span></h4>
                </div>

                <?php if ($this->session->flashdata('demo') or $this->session->flashdata('hapus')) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('demo'); ?>
                    <?php echo $this->session->flashdata('hapus'); ?>
                  </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('ubah') or $this->session->flashdata('tambah')) : ?>
                  <div class="alert alert-succees" role="alert">
                    <?php echo $this->session->flashdata('ubah'); ?>
                    <?php echo $this->session->flashdata('tambah'); ?>
                  </div>
                <?php endif; ?>
                <!-- slider Table starts -->
                <div class="table-responsive">
                    <table class="table data-thumb-view">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Tanggal Exp</th>
                                <th>Tipe</th>
                                <th>Layanan</th>
                                <th>Iklan Link</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($promo as $sldr) { ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td class="product-img">
                                        <img src="<?= base_url('images/promo/') . $sldr['foto']; ?>">
                                    </td>
                                    <td class="product-name text-danger"><?= $sldr['tanggal_berakhir']; ?></td>
                                    <td class="product-name"><?= $sldr['type_promosi']; ?></td>
                                    <td class="product-name">
                                        <?php if ($sldr['fitur_promosi'] == 0) {
                                            echo 'Link';
                                        } else {
                                            echo $sldr['fitur'];
                                        } ?>
                                    </td>
                                    <td class="product-name">
                                        <?php if ($sldr['link_promosi'] == NULL) { ?>
                                            Empty Link
                                        <?php } else {
                                            echo $sldr['link_promosi'];
                                        } ?>
                                    </td class="product-name">
                                    <td class="product-name">
                                        <?php if ($sldr['is_show'] == 1) { ?>
                                            <label class="badge badge-success">Active</label>
                                        <?php } else { ?>
                                            <label class="badge badge-danger">Non Active</label>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <span class="mr-1">
                                            <a href="<?= base_url(); ?>promoslider/ubah/<?= $sldr['id']; ?>">
                                                <i class="feather icon-edit text-info"></i>
                                            </a>
                                        </span>
                                        <span class="mr-1">
                                            <a href="<?= base_url(); ?>promoslider/hapus/<?= $sldr['id']; ?>" onclick="return confirm ('are you sure want to delete?')">
                                                <i class="feather icon-trash text-danger"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- slider data Table ends -->

                <!-- add new sidebar starts -->
                <div class="add-new-data-sidebar">
                    <div class="overlay-bg"></div>
                    <div class="add-new-data">
                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                            <div>
                                <h4 class="text-uppercase">Add New Promotion Slider</h4>
                            </div>
                            <div class="hide-data-sidebar">
                                <i class="feather icon-x"></i>
                            </div>
                        </div>
                        <div class="data-items pb-3">
                            <div class="data-fields px-2 mt-3">
                                <div class="row">
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">Exp on</label>
                                        <input type="date" class="form-control" id="data-name"></div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category">
                                            Promo Slider Type
                                        </label>
                                        <select class="form-control" id="data-category">
                                            <option>Service</option>
                                            <option>Link</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-status">Service</label>
                                        <select class="form-control" id="data-status">
                                            <option>Pending</option>
                                            <option>Canceled</option>
                                            <option>Delivered</option>
                                            <option>On Hold</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category">
                                            Status
                                        </label>
                                        <select class="form-control" id="data-category">
                                            <option>Active</option>
                                            <option>NonActive</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 data-field-col data-list-upload">
                                        <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                            <div class="dz-message">Upload Image</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                            <div class="add-data-btn">
                                <button class="btn btn-primary">Save</button>
                            </div>
                            <div class="cancel-data-btn">
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add new sidebar ends -->
            </section>
            <!-- Data list view end -->
        </div>
    </div>
</div>
<!-- END: Content-->