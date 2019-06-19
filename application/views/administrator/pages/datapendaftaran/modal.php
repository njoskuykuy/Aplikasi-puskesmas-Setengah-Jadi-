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
      <!-- form 1 -->
      <h3>Data Pasien</h3>
        <div class="form-group">
          <label for="no_rekamedis">No Rekamedis </label>
          <input type="text" class="form-control" id="no_rekamedis" name="no_rekamedis" placeholder="Masukkan No. Rekamedis">
        </div>
        <div class="form-group">
          <label for="nama_pasien">Nama pasien </label>
          <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama pasien">
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">tanggal_lahir </label>
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal_lahir">
        </div>
        <div class="form-group">
          <label for="nama_penanggungjawab">Nama PenanggungJawab </label>
          <input type="text" class="form-control" id="nama_penanggungjawab" name="nama_penanggungjawab" placeholder="Masukkan nama penanggungJawab">
        </div>
        <div class="form-group">
          <label class="control-label">Hubungan dengan PenanggungJawab</label>
          <div class="col-md">
            <div id="hub_penanggungjawab" class="btn-group" data-toggle="buttons" required="">
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="hub_penanggungjawab" value="saudara_kandung"> &nbsp; Saudara Kandung &nbsp;
              </label>
              <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="hub_penanggungjawab" value="orangtua"> Orang Tua
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="nik">Alamat</label>
          <div class="col-md">
              <textarea name="alamat" id="textarea" class="form-control col-md" rows="3" required="required"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Status Pasien</label>
          <div class="col-md">
            <div id="status_pasien" class="btn-group" data-toggle="buttons" required="">
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="status_pasien" value="bpjs"> &nbsp; BPJS&nbsp;
              </label>
              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" required="">
                <input type="radio" name="status_pasien" value="umum"> Umum
              </label>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>


        <!-- form 2 -->
        <h3>Data Pendaftaran</h3>
        <div class="form-group">
          <label for="no_rawat">No Rawat </label>
          <input type="text" class="form-control" id="no_rawat" name="no_rawat" placeholder="Masukkan No Rawat">
        </div>
        <div class="form-group">
          <label for="nama_dokter_tanggungjawab">Nama Dokter PenanggungJawab</label>
          <input type="text" class="form-control" id="nama_dokter_tanggungjawab" name="nama_dokter_tanggungjawab" placeholder="Masukkan Nama Pegawai">
        </div>
        
        <div class="form-group">
            <label for="bidang">Poli</label>
                <select class="form-control" name="nama_poli" id="poli">
                  <option>Pilih poli</option>
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