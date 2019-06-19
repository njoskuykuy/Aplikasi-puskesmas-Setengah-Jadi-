<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
    <div class="x_title">
    <h2>Data Poli</h2>
    
    <div class="clearfix"></div>
    <a href="#" data-toggle="modal" data-target="#ModalTambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data </a>
    <?php include 'modal.php';?>
    </div>
    <div class="x_content">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col" class="border-0">No</th>
            <th scope="col" class="border-0">Nama Poli</th>
            <th scope="col" class="border-0">Ruangan Poli</th>
            <th scope="col" class="border-0">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        <?php foreach ($this->data['DT_Poli'] as $key):?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $key->nama_poli;?></td>
            <td><?php echo $key->ruang_poli;?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit<?php echo $key->id_poli;?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <?php include 'modal-edit.php';?>
                <a href="#" data-toggle="modal" data-target="#ModalDelete<?php echo $key->id_poli;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
