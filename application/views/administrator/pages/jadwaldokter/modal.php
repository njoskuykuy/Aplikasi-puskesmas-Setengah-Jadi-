<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Tambah Data</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama_dokter">Nama Dokter </label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Masukkan Nama dokter">
        </div>
        <div class="form-group">
          <label for="hari">Hari </label>
          <input type="text" class="form-control" id="hari" name="hari" placeholder="Masukkan Hari">
        </div>
        <div class="form-group">
          <label for="jam_mulai">Jam Mulai</label>
          <input type="text" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Masukkan Jam Mulai">
        </div>
        <div class="form-group">
          <label for="jam_selesai">Jam Selesai </label>
          <input type="text" class="form-control" id="jam_selesai" name="jam_selesai" placeholder="Masukkan Jam Selesai">
        </div>
        

        <div class="form-group">
            <label for="bidang">Poli</label>
                <select class="form-control" name="nama_poli" id="bidang">
                  <option>Pilih Poli</option>
                  <?php foreach ($this->data['DT_Poli'] as $key):?>
                    <option value="<?php echo $key->id_poli; ?>"><?php echo $key->nama_poli; ?></option>
                <?php endforeach;?>
                </select>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info btn-sm" value="insert" name="insert">Submit</button>
        </div>
       </form>
      </div>
     
    </div>
  </div>
</div>