<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label class="control-label">Nomor Rekamedis</label>
            <input type="text" class="form-control" id="no_rekamedis" name="no_rekamedis" value="<?php echo $no_rekamedis = BuatKode();?>" readonly="">
        </div>
        <div class="form-group">
        <label class="control-label">Nomor KTP</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp">
        </div>
        <div class="form-group">
        <label class="control-label">Nomor BPJS</label>
            <input type="text" class="form-control" id="no_bpjs" name="no_bpjs">
        </div>
        <div class="form-group">
        <label class="control-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
        </div>
        <div class="form-group">
          <label class="control-label">Jenis Kelamin</label>
          <h6 style="color: red; font-style: italic;">*Pilih kembali jenis kelamin anda</h6>
          <div class="col-md">
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
        <label class="control-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>
        <div class="form-group">
        <label class="control-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        <div class="form-group">
          <label class="control-label col-md" for="alamat">Alamat<span class="required"></span>
          </label>
          <div class="col-md">
              <textarea name="alamat" id="textarea" class="form-control col-md" rows="3" required="required"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Status Pasien</label>
          <h6 style="color: red; font-style: italic;">*Pilih kembali Status Pasien anda</h6>
          <div class="col-md">
            <div id="status_pasien" class="btn-group" data-toggle="buttons" required="">
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="status_pasien" value="Umum"> &nbsp; Umum &nbsp;
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="status_pasien" value="BPJS"> BPJS
              </label>
            </div>
          </div>
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