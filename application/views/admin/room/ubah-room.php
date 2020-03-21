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
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Type Room</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <?php foreach ($rules as $data) : ?>
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('room/ubah/'.$data['kd_room'].'')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Room</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_room" class="form-control" placeholder="" id="kd_room" value="<?=$data['kd_room'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Nama Room</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="room" name="room" class="form-control" placeholder="" value="<?=$data['room'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Location</label>
                                                       <div class="col-md-9">
                                                            <input type="text" id="location" name="location" class="form-control" placeholder="" value="<?=$data['location'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Size</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="size" id="size" class="form-control" value="<?=$data['size'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Theatre</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="theatre" id="theatre" class="form-control" value="<?=$data['theatre'] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">U-Shape</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="u-shape" id="u-shape" class="form-control" value="<?=$data['u-shape'] ?>">   
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Round</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="round" id="round" class="form-control" value="<?=$data['round'] ?>">  
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Class</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="class" id="class" class="form-control" value="<?=$data['class'] ?>">  
                                                        </div>
                                                    </div>
                                                   
                                                      <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('room/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                    <?php endforeach ?>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->