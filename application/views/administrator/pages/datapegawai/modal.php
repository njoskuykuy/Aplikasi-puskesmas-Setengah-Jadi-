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
          <label for="nik">Nik </label>
          <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik">
        </div>
        <div class="form-group">
          <label for="nama_pegawai">Nama Pegawai </label>
          <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukkan Nama Pegawai">
        </div>
        <div class="form-group">
          <label for="npwp">NPWP </label>
          <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Masukkan NPWP">
        </div>
        <div class="form-group">
          <label for="nik">Tempat lahir </label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahir">
        </div>
        <div class="form-group">
          <label for="nik">Tanggal lahir </label>
          <input type="text" class="form-control" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal lahir">
        </div>
        <div class="form-group">
            <label for="bidang">Bidang</label>
                <select class="form-control" name="nama_bidang" id="bidang">
                  <option>Pilih bidang</option>
                  <?php foreach ($this->data['DT_Bidang'] as $key):?>
                    <option value="<?php echo $key->id_bidang; ?>"><?php echo $key->nama_bidang; ?></option>
                <?php endforeach;?>
                </select>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
                <select class="form-control" name="nama_jabatan" id="jabatan">
                  <option>Pilih Jabatan</option>
                  <?php foreach ($this->data['DT_Jabatan'] as $key):?>
                    <option value="<?php echo $key->id_jabatan; ?>"><?php echo $key->nama_jabatan; ?></option>
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