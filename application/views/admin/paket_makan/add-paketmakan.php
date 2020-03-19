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
            
                                        <h4 class="header-title m-t-0 m-b-30">Add Paket Makan</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('paket_makan/add')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Katagori</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="kd_paket" class="form-control" placeholder="" id="kd_paket" value="<?= set_value('kd_paket') ?>">
                                                            <?= form_error('kd_paket', '<label id="kd_paket-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Nama Paket</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="nama_paket" name="nama_paket" class="form-control" placeholder="" value="<?= set_value('nama_paket') ?>">
                                                            <?= form_error('nama_paket', '<label id="nama_paket-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Harga</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="harga" class="form-control" id="harga" value="<?= set_value('harga') ?>">
                                                            <?= form_error('harga', '<label id="harga-error" class="error text-danger">', '</label>') ?>
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
                                                            <input type="text" name="ket" id="ket" class="form-control" value="<?= set_value('ket') ?>">
                                                        <?= form_error('ket', '<label id="ket-error" class="error text-danger">', '</label>') ?>   
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kategori</label>
                                                        <div class="col-md-9">
                                                            <tr>
                                                            <td><input type="radio" name="keterangan" value="Standard" checked/>Standard</td>
                                                            </tr>
                                                            <tr>
                                                            <td><input type="radio" name="keterangan" value="VIP">VIP</td>
                                                            </tr>
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