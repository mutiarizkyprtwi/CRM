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
            
                                        <h4 class="header-title m-t-0 m-b-30">Edit Paket Makan</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <?php foreach ($rules as $data) : ?>
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('paket_makan/ubah/'.$data['kd_paket'].'')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Katagori</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_paket" class="form-control" placeholder="" id="kd_paket" value="<?=$data['kd_paket'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Nama Paket</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="nama_paket" name="nama_paket" class="form-control" placeholder="" value="<?=$data['nama_paket'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Harga</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="harga" class="form-control" id="harga" value="<?=$data['harga'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Satuan</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="satuan">
                                                               <option value="Orang/Pax">Orang/Pax</option>
                                                            </select>
                                                               
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Keterangan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="ket" id="ket" class="form-control" value="<?=$data['ket'] ?>"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kategori</label>
                                                        <div class="col-md-9">
                                                            <tr>
                                                            <td><input type="radio" name="kategori" value="Standard">Standard</td>
                                                            </tr>
                                                            <tr>
                                                            <td><input type="radio" name="kategori" value="VIP">VIP</td>
                                                            </tr>
                                                        </div>
                                                    </div>
                                                      <div class="form-group row float-right">
                                                           <button type="submit" class="btn btn-info waves-effect w-md waves-light m-b-5" style="margin-right: 10px;">Save</button>
                                                    </div>
                                                    <a href="<?= base_url('paket_makan/index') ?>"><button type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5" style="margin-left: 250px;">Cancel</button></a>
                                                    <?php endforeach ?>
                                                </form>
                                            </div><!-- end col -->            
                                        </div><!-- end row -->
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->