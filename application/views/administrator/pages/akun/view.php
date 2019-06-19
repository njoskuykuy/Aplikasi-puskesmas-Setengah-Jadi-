<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h2>Akun User</h2>
        <div class="ln_solid"></div>
        <div class="x_content">
            <div class="col-md text"  >
                <center>
                <div class="thumbnail" style="height: 100%; width: 30%;" >
                    <div class="image view view-first"  style="height: 300px;">
                        <img style="width: 100%; height: 100%;  display: block;" src="<?php echo base_url();?>assets/images/<?php echo $this->data['sess_foto'];?>" alt="image" />
                    </div>
                </div>
                </center>
            </div>
            <center>
            <div class="form-group">
                <div class="col-md">
                   
                  <button data-toggle="modal" data-target="#GantiFoto" class="btn btn-primary" type="button">Ganti Foto</button>
                    
                  <button data-toggle="modal" data-target="#GantiPassword" class="btn btn-info" type="button">Ganti Password</button>
                </div>
            </div>
            </center>
            <div class="col-md text" style="margin-top: 25px;">
                <form id="demo-form2" action="?" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_user">Nama User <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_user" name="nama_user" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $this->data['sess_nama_user'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_user">Email User <span class="required" ></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email_user" name="email_user" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $this->data['sess_email_user'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_user">Alamat User<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="alamat_user" id="textarea" class="form-control col-md-7 col-xs-12" rows="3" required="required"><?php echo $this->data['sess_alamat_user'];?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $this->data['sess_username'];?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <h6 style="color: red; font-style: italic;">*Pilih kembali jenis kelamin anda</h6>
                          <div id="jk" class="btn-group" data-toggle="buttons" required="">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                              <input type="radio" name="jk" value="L"> &nbsp; Laki-Laki &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                              <input type="radio" name="jk" value="P"> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group" >
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
                          <button type="submit" name="update" value="update" class="btn btn-success" style="width: 100%;">Update</button>
                        </div>
                      </div>

                    </form>

                    <?php include 'modal-edit.php';?> 
            </div>
        </div>
    </div>
</div>




<!-- <div class="col-md text"  >
<h2>Data Jabatan</h2>
    <center>
    <div class="thumbnail" style="height: 100%; width: 30%;" >
        <div class="image view view-first"  style="height: 400px;">
            <img style="width: 100%; height: 100%;  display: block;" src="<?php //echo base_url();?>assets/images/foto_akun.jpg" alt="image" />
        </div>
    </div>
    </center>
</div> -->