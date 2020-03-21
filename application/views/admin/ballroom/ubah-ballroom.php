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
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Ballroom</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <?php foreach ($rules as $data) : ?>
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('ballroom/ubah/'.$data['kd_ballroom'].'')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Ballroom</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_ballroom" class="form-control" placeholder="" id="kd_ballroom" value="<?=$data['kd_ballroom'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Jenis Ballroom</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="jenis_ballroom" name="jenis_ballroom" class="form-control" placeholder="" value="<?=$data['jenis_ballroom'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Mata Uang</label>
                                                        <div class="col-sm-9">
                                                            <tr>
                                                            <td><input type="radio" name="mata_uang" value="IDR" checked/>IDR</td>
                                                            </tr>
                                                            <tr>
                                                            <td><input type="radio" name="mata_uang" value="USD">USD</td>
                                                            </tr>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Harga</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="harga" id="harga" class="form-control" value="<?=$data['harga'] ?>">  
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Satuan</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="satuan">
                                                               <option value="pax">pax</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Detail</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="detail" id="detail" class="form-control" value="<?=$data['detail'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kategori</label>
                                                        <div class="col-sm-9">
                                                           <tr>
                                                            <td><input type="radio" name="kategori" value="RESIDENTIAL">RESIDENTIAL</td>
                                                            </tr>
                                                            <tr>
                                                            <td><input type="radio" name="kategori" value="NON RESIDENTIAL">NON RESIDENTIAL</td>
                                                            </tr>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('ballroom/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                    <?php endforeach ?>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->