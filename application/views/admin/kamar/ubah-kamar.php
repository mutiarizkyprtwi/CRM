 <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#" class="dropdown-item">Action</a></li>
                                                <li><a href="#" class="dropdown-item">Another action</a></li>
                                                <li><a href="#" class="dropdown-item">Something else here</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a href="#" class="dropdown-item">Separated link</a></li>
                                            </ul>
                                        </div>
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Kategori Kamar</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <?= form_open_multipart('kamar/ubah/'.$kriteria['kd_kategori'])?>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Katagori</label>
                                                        <div class="col-md-9">
                                                            <input type="text" readonly name="kd_kategori" class="form-control" placeholder="" id="kd_kategori" value="<?=$kriteria['kd_kategori'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Katagori</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="katagori" name="kategori" class="form-control" placeholder="" value="<?=$kriteria['kategori'] ?>"?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Keterangan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $kriteria['keterangan'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Harga Permalam</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="harga_permalam" name="harga_permalam" class="form-control" placeholder="" value="<?=$kriteria['harga_permalam'] ?>"?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label"> Fasilitas</label>
                                                        <div class="col-md-9">
                                                             <select multiple="multiple" class="multi-select" id="fasilitas" name="fasilitas[]" data-plugin="multiselect">
                                                            <?php
                                                             foreach ($fasilitas as $fst) : ?>
                                                             <option value="<?= $fst['kd_fasilitas'] ?>"><sub><?= $fst['fasilitas']?></sub></option>
                                                             <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Foto</label>
                                                        <div class="col-md-9">
                                                            <input type="file" id="fotoKamar" name="fotoKamar[]" multiple="" class="form-control" placeholder="" >
                                                            <?= form_error('fotoKamar', '<label id="fotoKamar" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row float-right">
                                                           <button type="submit" name="ubah" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('kamar/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                <?php form_close()?>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <?php foreach($fotoKamar as $foto) :?>
                                    <img src="<?= base_url('images/kamar/'.$foto['nama_foto']) ?>" class="img-fluid img-thumbnail" width="100">
                                    <a href="<?= base_url('kamar/hapusfotokamar/'.$foto['id_fotokamar'].'/'.$foto['kd_kategori']) ?>"><i class="fa fa-trash text-danger mr-3"></i> </a> 
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- end row -->