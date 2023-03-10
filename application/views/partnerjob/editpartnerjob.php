<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
          <!-- partial -->
          <section class="content-wrapper">
            <div class="row ">
              <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php if ($this->session->flashdata()) : ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('demo'); ?>
                      </div>
                    <?php endif; ?>
                    <h4 class="card-title">Tambah Tipe Kendaraan</h4>

                    <?= form_open_multipart('partnerjob/editpartnerjob/' . $partnerjob['id']); ?>
                    
                    <input type="hidden" name="id" value="<?= $partnerjob['id'] ?>">
                    <div class="form-group">
                      <label for="status_berita">Icon Maps</label>
                      <select class="select2 js-example-basic-single" style="width:100%" name="icon" id="statusjob">
                        <option value="1" <?php if ($partnerjob['icon'] == '1') { ?>selected<?php } ?>>Motor Icon</option>
                        <option value="2" <?php if ($partnerjob['icon'] == '2') { ?>selected<?php } ?>>Mobil Icon</option>
                        <option value="3" <?php if ($partnerjob['icon'] == '3') { ?>selected<?php } ?>>Truck Icon</option>
                        <option value="4" <?php if ($partnerjob['icon'] == '4') { ?>selected<?php } ?>>Delivery Bike Icon</option>
                        <option value="5" <?php if ($partnerjob['icon'] == '5') { ?>selected<?php } ?>>HatchBack Car Icon</option>
                        <option value="6" <?php if ($partnerjob['icon'] == '6') { ?>selected<?php } ?>>SUV Car Icon</option>
                        <option value="7" <?php if ($partnerjob['icon'] == '7') { ?>selected<?php } ?>>Mobil Box Icon</option>
                        <option value="8" <?php if ($partnerjob['icon'] == '8') { ?>selected<?php } ?>>Sepeda Icon</option>
                        <option value="9" <?php if ($partnerjob['icon'] == '9') { ?>selected<?php } ?>>Cator Icon</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="title">Tipe Kendaraan</label>
                      <input type="text" class="form-control" name="driver_job" id="job" placeholder="enter job title" value="<?= $partnerjob['driver_job'] ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="status_berita">Status Kendaraan</label>
                      <select class="js-example-basic-single select2" style="width:100%" name="status_job" id="statusjob">
                        <option value="1" <?php if ($partnerjob['status_job'] == '1') { ?>selected<?php } ?>>Active</option>
                        <option value="0" <?php if ($partnerjob['status_job'] == '0') { ?>selected<?php } ?>>NonActive</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Kirim</button>
                    <button class="btn btn-light">Batal</button>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end of content wrapper -->
        </div>
    </div>
</div>