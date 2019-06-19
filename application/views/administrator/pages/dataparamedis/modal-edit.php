<!-- Modal -->
<?php ?>
<div class="modal fade" id="ModalEdit<?php echo $key->id_paramedis;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Ubah Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?" method="POST" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="id_paramedis" name="id_paramedis" value="<?php echo $key->id_paramedis;?>">
        <div class="form-group">
          <label for="kd_paramedis" >Kode Paramedis</label>
          <input type="text" class="form-control" id="kd_paramedis" name="kd_paramedis" value="<?php echo $key->kd_paramedis;?>">
        </div>
        <div class="form-group">
          <label for="nama_paramedis" >Nama Paramedis </label>
          <input type="text" class="form-control" id="nama_paramedis" name="nama_paramedis" placeholder="Masukkan Nama Pegawai" value="<?php echo $key->nama_paramedis;?>">
        </div>
        <div class="form-group">
          <label class="control-label">Jenis Kelamin</label>
          <div class="col-md">
          <h6 style="color: red; font-style: italic;">*Pilih kembali jenis kelamin anda</h6>
            <div id="jenis_kelamin" class="btn-group" data-toggle="buttons" required="">
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="jenis_kelamin" value="L"> &nbsp; Laki-Laki &nbsp;
              </label>
              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="no_izin_paramedis">No. Izin Paramedis </label>
          <input type="text" class="form-control" id="no_izin_paramedis" name="no_izin_paramedis" placeholder="Masukkan No Izin Paramedis" value="<?php echo $key->no_izin_paramedis;?>"> 
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat lahir </label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir" value="<?php echo $key->tempat_lahir;?>">
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal lahir </label>
          <input type="text" class="form-control" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal lahir" value="<?php echo $key->tanggal_lahir;?>" > 
        </div>        
        <div class="form-group">
          <label class="control-label col-md" for="alamat">Alamat User<span class="required"></span>
          </label>
          <div class="col-md">
              <textarea name="alamat" id="textarea" class="form-control col-md" rows="3" required="required"><?php echo $key->alamat;?></textarea>
          </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info btn-sm" value="update" name="update">Submit</button>
        </div>
       </form>
      </div>
     
    </div>
  </div>
</div>