<!-- Modal -->
<div class="modal fade" id="ModalDelete<?php echo $key->id_bidang;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <input type="hidden" class="form-control" id="id_bidang" name="id_bidang" value="<?php echo $key->id_bidang;?>">
        <div class="form-group">
            <h4>Apakah anda yakin ingin menghapus data <strong><?php echo $key->nama_bidang;?></strong> ??</h4>
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