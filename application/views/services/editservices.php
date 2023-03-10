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
                                <!--<?= var_dump($choosenwilayah);?>-->
                                <h4 class="card-title">
                                    <?php if ($this->session->flashdata()) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $this->session->flashdata('demo'); ?>
                                        </div>
                                    <?php endif; ?>
                                    Layanan</h4>
                                <?= form_open_multipart('services/ubah/' . $id_fitur); ?>
                                <input type="hidden" name="id_fitur" value='<?= $id_fitur ?>'>
                                <div class="form-group">
                                    <input type="file" class="dropify" name="icon" data-max-file-size="3mb" data-default-file="<?= base_url('images/fitur/') . $icon ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Nama</label>
                                    <input type="text" class="form-control" id="newstitle" name="fitur" value="<?= $fitur ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="service_tipe">Tipe Layanan</label>
                                    <select class="select2 js-example-basic-single" name="home" style="width:100%">
                                        <option value="1" <?php if ($home == '1') { ?>selected<?php } ?>>Penumpang Transfortasi</option>
                                        <option value="2" <?php if ($home == '2') { ?>selected<?php } ?>>Pengiriman</option>
                                        <option value="3" <?php if ($home == '3') { ?>selected<?php } ?>>Layanan Sewa</option>
                                        <option value="4" <?php if ($home == '4') { ?>selected<?php } ?>>Layanan Pembelian</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Harga</label>
                                    <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="biaya" value="<?= number_format($biaya, 0, ".", ".") ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Diskon (%)</label>
                                    <input type="text" class="form-control" id="newstitle" name="nilai" value="<?= $nilai ?>" placeholder="ex 10%">
                                </div>
                                <div class="form-group">
                                    <label for="newscategory">Unit</label>
                                    <select class="select2 js-example-basic-single" name="keterangan_biaya" style="width:100%">
                                        <!-- <option value="KM">Kilometers</option> -->
                                        <option value="KM" <?php if ($keterangan_biaya == 'KM') { ?>selected<?php } ?>>Kilometer</option>
                                        <option value="Hr" <?php if ($keterangan_biaya == 'Hr') { ?>selected<?php } ?>>Perjam</option>
                                        <!-- <option value="Hr">An Hour</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Komisi (%)</label>
                                    <input type="text" class="form-control" id="newstitle" name="komisi" value="<?= $komisi ?>" placeholder="ex 10%" required>
                                </div>
                                <div class="form-group">
                                    <label for="newscategory">Kendaraan</label>
                                    <select class="select2 js-example-basic-single" name="driver_job" style="width:100%">
                                        <?php foreach ($driverjob as $drj) { ?>
                                            <option value="<?= $drj['id'] ?>" <?php if ($driver_job == $drj['id']) { ?>selected<?php } ?>><?= $drj['driver_job'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Harga Minim</label>
                                    <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="biaya_minimum" value="<?= number_format($biaya_minimum, 0, ".", ".") ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Driver Radius</label>
                                    <input type="text" class="form-control" id="newstitle" name="maks_distance" value="<?= $maks_distance ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Pesanan Jarak Maks</label>
                                    <input type="text" class="form-control" id="newstitle" name="jarak_minimum" value="<?= $jarak_minimum ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Minimum Saldo</label>
                                    <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="wallet_minimum" value="<?= number_format($wallet_minimum, 0, ".", ".") ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="newstitle">Deskripsi</label>
                                    <input type="text" class="form-control" id="newstitle" name="keterangan" value="<?= $keterangan ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="newscategory">Status</label>
                                    <select class="select2 js-example-basic-single" name="active" style="width:100%">
                                        <option value="0" <?php if ($active == 0) { ?>selected<?php } ?>>Non aktif</option>
                                        <option value="1" <?php if ($active == 1) { ?>selected<?php } ?>>Aktif</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="newscategory">Wilayah</label>
                                    <select id="wilayah" class="select2 js-example-basic-single" multiple="multiple"  name="wilayah[]" style="width:100%">
                                        <?php foreach($wilayah as $key) { ?>
                                            
                                            <option <?php 
                                                for($i=0; $i < count($choosenwilayah); $i++ ) {
                                                if($choosenwilayah[$i] == $key->id) echo 'selected';    
                                                }
                                                  ;?> 
                                                value="<?= $key->id ;?>"><?= $key->nama_cabang;?></option>
                                        <?php }?>
                                        
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success mr-2">Kirim</button>
                                <a href="<?= base_url() ?>services" class="btn btn-danger">Batal</a>
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