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
            
                                        <h4 class="header-title m-t-0 m-b-30">Add Fasilitas</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('fasilitas/add')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Fasilitas</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_fasilitas" class="form-control" placeholder="" id="kd_fasilitas" value="<?= set_value('kd_fasilitas') ?>">
                                                            <?= form_error('kd_fasilitas', '<label id="kd_fasilitas-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Fasilitas</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="fasilitas" name="fasilitas" class="form-control" placeholder="" value="<?= set_value('fasilitas') ?>">
                                                            <?= form_error('fasilitas', '<label id="fasilitas-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5">Save</button>
                                                    </div>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->