<!-- Modal -->
<div class="modal fade" id="ModalDelete<?php echo $key->id_jabatan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Hapus Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?" method="POST" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="id_jabatan" name="id_jabatan" value="<?php echo $key->id_jabatan;?>">
        <div class="form-group">
            <h6>Apakah anda yakin ingin menghapus data <strong><?php echo $key->nama_jabatan;?></strong> ??</h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info btn-sm" value="delete" name="delete">Submit</button>
        </div>
       </form>
      </div>
     
    </div>
  </div>
</div>