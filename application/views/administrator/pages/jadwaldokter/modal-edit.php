<!-- Modal -->
<?php ?>
<div class="modal fade" id="ModalEdit<?php echo $key->id_jadwal_dokter;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <input type="hidden" class="form-control" id="id_jadwal_dokter" name="id_jadwal_dokter" value="<?php echo $key->id_jadwal_dokter;?>">
        <div class="form-group">
          <label for="nama_dokter">Nama Dokter </label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Masukkan Nama dokter" value="<?php echo $key->nama_dokter;?>">
        </div>
        <div class="form-group">
          <label for="hari">Hari </label>
          <input type="text" class="form-control" id="hari" name="hari" placeholder="Masukkan Hari" value="<?php echo $key->hari;?>">
        </div>
        <div class="form-group">
          <label for="jam_mulai">Jam Mulai</label>
          <input type="text" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Masukkan Jam Mulai" value="<?php echo $key->jam_mulai;?>">
        </div>
        <div class="form-group">
          <label for="jam_selesai">Jam Selesai </label>
          <input type="text" class="form-control" id="jam_selesai" name="jam_selesai" placeholder="Masukkan Jam Selesai" value="<?php echo $key->jam_selesai;?>">
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