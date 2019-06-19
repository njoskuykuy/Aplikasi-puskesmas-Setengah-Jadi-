<!-- Modal -->
<?php ?>
<div class="modal fade" id="ModalEdit<?php echo $key->id_pegawai;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <input type="hidden" class="form-control" id="id_pegawai" name="id_pegawai" value="<?php echo $key->id_pegawai;?>">
        <div class="form-group">
          <label for="nik" >NIK</label>
          <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $key->nik;?>">
        </div>
        <div class="form-group">
          <label for="nama_pegawai" >Nama Pegawai </label>
          <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" value="<?php echo $key->nama_pegawai;?>">
        </div>
        <div class="form-group">
          <label for="npwp"  >NPWP </label>
          <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Masukkan NPWP" value="<?php echo $key->npwp;?>">
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat lahir </label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir" value="<?php echo $key->tempat_lahir;?>">
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal lahir </label>
          <input type="text" class="form-control" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal lahir" value="<?php echo $key->tanggal_lahir;?>" > 
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