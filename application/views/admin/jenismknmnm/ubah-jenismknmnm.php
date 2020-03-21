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
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Jenis Resto</h4>
                                        <div class="row">
                                            <?php foreach ($rules as $data) : ?>
                                            <div class="col-xl-12">
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('jenis_makan_minum/ubah/'.$data['kd_jns_menu'].'')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Jenis Menu</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_jns_menu" class="form-control" placeholder="" id="kd_jns_menu" value="<?=$data['kd_jns_menu'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Jenis Menu</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="jns_menu" name="jns_menu" class="form-control" placeholder="" value="<?=$data['jns_menu'] ?>">
                                                        </div>
                                                    </div>
                                                      <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('jenis_makan_minum/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                    <?php endforeach ?>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->