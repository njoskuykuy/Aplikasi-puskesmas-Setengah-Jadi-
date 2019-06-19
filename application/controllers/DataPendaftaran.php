<?php

class DataPendaftaran extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['JudulWebsite'] = "administrator";
        $this->data['PageView'] = "administrator/pages/datapendaftaran/view";
        $this->data['DT_DataPendaftaran'] = $this->M_Proses->QueryJoin('SELECT  tb_pendaftaran.id_pendaftaran, 
                                                              
                                                                                tb_pendaftaran.no_rawat , 
                                                                                tb_pendaftaran.no_rekamedis , 
                                                                                tb_pendaftaran.tanggal_daftar , 
                                                                                tb_pendaftaran.nama_dokter_tanggungjawab ,
                                                                                tb_pendaftaran.nama_penanggungjawab, 
                                                                                tb_pendaftaran.hub_penanggungjawab,
                                                                                tb_pendaftaran.alamat_penanggungjawab,
                                                                                tb_pendaftaran.status_pasien,
                                                                                tb_pendaftaran.no_bpjs,
                                                                                tb_poli.id_poli,
                                                                                tb_poli.nama_poli
                                                                        FROM tb_pendaftaran 
                                                                                JOIN tb_poli ON tb_pendaftaran.id_poli = tb_poli.id_poli
                                                                                        
                                                                      ');
    $this->data['DT_Poli'] = $this->M_Proses->GetData('tb_poli');
    if(!$this->input->post()){
        $this->load->view($this->data['UrlTemplate'], $this->data);
    }else if($this->input->post('insert')){
        $no_rekamedis = $this->input->post('no_rekamedis');
        $nama_pasien = $this->input->post('nama_pasien');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $nama_penanggungjawab = $this->input->post('nama_penanggungjawab');
        $hub_penanggungjawab = $this->input->post('hub_penanggungjawab');
        $alamat_penanggungjawab = $this->input->post('alamat_penanggungjawab');
        $status_pasien = $this->input->post('status_pasien');
        $no_rawat = $this->input->post('no_rawat');
        $nama_dokter_tanggungjawab = $this->input->post('nama_dokter_tanggungjawab');
        $nama_poli = $this->input->post('nama_poli');

        $data = array(
            'no_rekamedis' => $no_rekamedis,
            'nama_pasien' => $nama_pasien,
            'tanggal_lahir' => $tanggal_lahir,
            'nama_penganggungjawab' => $nama_penganggungjawab,
            'hub_penanggungjawab' => $hub_penanggungjawab,
            'alamat_penanggungjawab' => $alamat_penanggungjawab,
            'status_pasien' => $status_pasien,
            'no_rawat' => $no_rawat,
            'nama_dokter_tanggungjawab' => $nama_dokter_tanggungjawab,
            'id_poli' => $nama_poli
        );

        $sqlInsert = $this->M_Proses->insert('tb_pendaftaran', $data);

    

    }

    }



}