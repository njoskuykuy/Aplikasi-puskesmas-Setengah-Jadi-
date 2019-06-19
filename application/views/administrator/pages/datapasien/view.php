<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
    <div class="x_title">
    <h2>Data Pasien</h2>
    
    <div class="clearfix"></div>
    <a href="#" data-toggle="modal" data-target="#ModalTambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data </a>
    <?php include 'modal.php';?>
    </div>
    <div class="x_content">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>No Rekamedis</th>
            <th>No KTP</th>
            <th>No BPJS</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Status Pasien</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        <?php foreach ($this->data['DT_Pasien'] as $key):?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $key->no_rekamedis;?></td>
            <td><?php echo $key->no_ktp;?></td>
            <td><?php echo $key->no_bpjs;?></td>
            <td><?php echo $key->nama_pasien;?></td>
            <td><?php echo $key->jenis_kelamin;?></td>
            <td><?php echo $key->tempat_lahir;?></td>
            <td><?php echo $key->tanggal_lahir;?></td>
            <td><?php echo $key->alamat;?></td>
            <td><?php echo $key->status_pasien;?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit<?php echo $key->id_data_pasien;?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <?php include 'modal-edit.php';?>
                <a href="#" data-toggle="modal" data-target="#ModalDelete<?php echo $key->id_data_pasien;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
