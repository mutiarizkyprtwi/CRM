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
            
                                        <h4 class="header-title m-t-0 m-b-30">Add Check-in Kamar</h4>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <form class="form-horizontal" method="POST" 
                                                action="<?= base_url('checkin_kamar/add')?>">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Kode Katagori</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="no_kamar" class="form-control" placeholder="" id="no_kamar" value="<?= set_value('no_kamar') ?>">
                                                            <?= form_error('no_kamar', '<label id="no_kamar-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Type Room</label>
                                                        <div class="col-md-9">
                                                        <select class="form-control" name="type_room">
                                                            <option value="STANDARD">STANDARD</option>
                                                            <option value="JUNIOR SUITE">JUNIOR SUITE</option>
                                                            <option value="SUPERIOR SINGLE">SUPERIOR SINGLE</option>
                                                            <option value="SUPERIOR TWIN">SUPERIOR TWIN</option>
                                                            <option value="SUPERIOR KING">SUPERIOR KING</option>
                                                            <option value="SUITE FAMILY">SUITE FAMILY</option>
                                                            <option value="DELUXE FAMILY">DELUXE FAMILY</option>
                                                            <option value="RUMAH KAYU">RUMAH KAYU</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Nama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama') ?>">
                                                            <?= form_error('nama', '<label id="nama-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Arrival</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="arrival" placeholder="dd/mm/yyyy" id="datepicker-autoclose" value="">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                                </div>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Depart</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                 <input type="text" class="form-control" name="depart" placeholder="dd/mm/yyyy" id="datepicker-autoclose2" value="">
                                                                 <div class="input-group-append">
                                                                 <span class="input-group-text bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                                </div>
                                                             </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">harga</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="harga" class="form-control" id="harga" value="<?= set_value('harga') ?>">
                                                            <?= form_error('harga', '<label id="harga-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">BF</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="bf" class="form-control" id="bf" value="<?= set_value('bf') ?>">
                                                            <?= form_error('bf', '<label id="bf-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Extra Bed</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="extra_bed" class="form-control" id="extra_bed" value="<?= set_value('extra_bed') ?>">
                                                            <?= form_error('extra_bed', '<label id="extra_bed-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">Total</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="total_harga" class="form-control" id="total_harga" value="<?= set_value('total_harga') ?>">
                                                            <?= form_error('total_harga', '<label id="total_harga-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">PAX</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="pax" class="form-control" id="pax" value="<?= set_value('pax') ?>">
                                                            <?= form_error('pax', '<label id="pax-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">HU</label>
                                                        <div class="col-md-9">
                                                            <input type="integer" name="hu" class="form-control" id="hu" value="<?= set_value('hu') ?>">
                                                            <?= form_error('hu', '<label id="hu-error" class="error text-danger">', '</label>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 control-label">REMARK</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="remark" class="form-control" id="remark" value="<?= set_value('remark') ?>">
                                                            <?= form_error('remark', '<label id="remark-error" class="error text-danger">', '</label>') ?>
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