<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
    <div class="x_title">
    <h2>Data Dokter</h2>
    
    <div class="clearfix"></div>
    <a href="#" data-toggle="modal" data-target="#ModalTambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data </a>
    <?php include 'modal.php';?>
    </div>
    <div class="x_content">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
        <tr>
        <th scope="col" class="border-0">No</th>
                <th scope="col" class="border-0">Kode Dokter</th>
                <th scope="col" class="border-0">Nama Dokter</th>
                <th scope="col" class="border-0">Jenis Kelamin</th>
                <th scope="col" class="border-0">No Induk Dokter</th>
                <th scope="col" class="border-0">Tempat Lahir</th>
                <th scope="col" class="border-0">Tanggal Lahir</th>
                <th scope="col" class="border-0">Alamat</th>
                <th scope="col" class="border-0">Nama Poli</th>
                <th scope="col" class="border-0">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        <?php foreach ($this->data['DT_Dokter'] as $key):?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $key->kd_dokter;?></td>
            <td><?php echo $key->nama_dokter;?></td>
            <td><?php echo $key->jenis_kelamin;?></td>
            <td><?php echo $key->no_induk_dokter;?></td>
            <td><?php echo $key->tempat_lahir;?></td>
            <td><?php echo $key->tanggal_lahir;?></td>
            <td><?php echo $key->alamat;?></td>
            <td><?php echo $key->nama_poli;?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit<?php echo $key->id_dokter;?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <?php include 'modal-edit.php';?>
                <a href="#" data-toggle="modal" data-target="#ModalDelete<?php echo $key->id_dokter;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                <?php include 'modal-delete.php';?>
           </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>
</div>
















<!-- <div class="row">
    <div class="col">
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
        <h3 class="m-0 mb-2">Data Jabatan</h3>
        <a href="#" data-toggle="modal" data-target="#ModalTambah" class='btn btn-outline-primary' >Tambah</a>
        <?php //include 'modal.php';?>
        </div>
        <div class="card-body p-0 pb-3 text-center">
        <table class="table mb-0 table-responsive">
            <thead class="bg-light">
            <tr>
                <th scope="col" class="border-0">No</th>
                <th scope="col" class="border-0">Nik</th>
                <th scope="col" class="border-0">Nama Pegawai</th>
                <th scope="col" class="border-0">Npwp</th>
                <th scope="col" class="border-0">Tempat Lahir</th>
                <th scope="col" class="border-0">Tanggal Lahir</th>
                <th scope="col" class="border-0">Nama Bidang</th>
                <th scope="col" class="border-0">Nama Jabatan</th>
                <th scope="col" class="border-0">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php //$i = 1;?>
            <?php //foreach ($this->data['DT_Pegawai'] as $key):?>
            <tr>
                <?php //echo var_dump($this->data['DT_Pegawai']); die;?>
                <td><?php //echo $i;?></td>
                <td><?php //echo $key->nik;?></td>
                <td><?php //echo $key->nama_pegawai;?></td>
                <td><?php //echo $key->npwp;?></td>
                <td><?php //echo $key->tempat_lahir;?></td>
                <td><?php //echo $key->tanggal_lahir;?></td>
                <td><?php //echo $key->nama_bidang;?></td>
                <td><?php //echo $key->nama_jabatan;?></td>

                <td>
                <button type="button" class="btn btn-outline-warning">Edit</button> -->
                <!-- <a href="#" data-toggle="modal" data-target="#ModalEdit<?php //echo $key->id_Dokter;?>" class='btn btn-outline-warning' >Edit</a>
                <?php //include 'modal-edit.php';?>
                <a href="#" data-toggle="modal" data-target="#ModalDelete<?php // echo $key->id_Dokter;?>" class='btn btn-outline-danger' >Delete</a>
                <?php //include 'modal-delete.php';?>
                </td>
            </tr> 
            <?php //$i++;?>
            <?php //endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>  -->