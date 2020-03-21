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
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Kamar</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <?php foreach ($rules as $data) : ?>
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('no_kamar/ubah/'.$data['no_kamar'].'')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Nomor Kamar</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="no_kamar" class="form-control" placeholder="" id="no_kamar" value="<?=$data['no_kamar'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Lantai</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="lantai" name="lantai" class="form-control" placeholder="" value="<?=$data['lantai'] ?>"?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Kategori</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="kd_kategori">
                                                             <?php
                                                             foreach ($rules as $rule) : ?>
                                                             <option value="<?= $rule['kd_kategori'] ?>"><?= $rule['kd_kategori']?></sub></option>
                                                             <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('no_kamar/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                    <?php endforeach ?>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->