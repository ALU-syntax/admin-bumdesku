<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
          <!-- partial -->
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php if ($this->session->flashdata()) : ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('demo'); ?>
                      </div>
                    <?php endif; ?>
                    <h4 class="card-title">Form Berita</h4>
                    <?= form_open_multipart('news/tambah'); ?>

                    <div class="form-group">
                      <label>Gambar Berita</label>
                      <input type="file" class="dropify" name="foto_berita" id="foto_berita" data-max-file-size="3mb" required />
                    </div>
                    <div class="form-group">
                      <label for="title">Judul</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="enter news title" required>
                    </div>
                    <div class="form-group">
                      <label for="id_kategori">Kategori Berita</label>
                      <select class="select2 js-example-basic-single" style="width:100%" name="id_kategori" id = "id_kategori" >
                        <?php foreach ($news as $nw) { ?>
                          <option value="<?= $nw['id_kategori_news'] ?>"><?= $nw['kategori'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="status_berita">Status Berita</label>
                      <select class="select2 js-example-basic-single" style="width:100%" name="status_berita" id="status_berita">
                        <option value="1">Aktif</option>
                        <option value="0">Non Aktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="newscontent">Konten Berita</label>
                      <textarea name="content" type="text" class="form-control" id="summernoteExample1" placeholder="Location" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Kirim</button>
                    <a href="<?= base_url() ?>news" class="btn btn-light mr-2">Batal</a>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of content wrapper -->
        </div>
    </div>
</div>


