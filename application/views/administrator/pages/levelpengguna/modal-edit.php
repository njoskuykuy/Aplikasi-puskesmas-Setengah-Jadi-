<!-- Modal -->
<div class="modal fade" id="ModalEdit<?php echo $key->id_level_pengguna;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <input type="hidden" class="form-control" id="id_level_pengguna" name="id_level_pengguna" value="<?php echo $key->id_level_pengguna;?>">
        <div class="form-group">
            <label for="nama_level">Nama Level</label>
            <input type="text" class="form-control" id="nama_level" name="nama_level" value="<?php echo $key->nama_level;?>">
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