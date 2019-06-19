<?php

class DataJabatan extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
    }

    public function index(){

        $this->data['JudulWeb'] = 'Administrator';
        $this->data['PageView'] = 'administrator/pages/datajabatan/view'; 

        if(!$this->input->post()){
            $this->data['DT_Jabatan'] = $this->M_Proses->GetData('tb_jabatan');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else {
            if($this->input->post('delete')){
                $id_jabatan = $this->input->post('id_jabatan');
                $where = [
                    'id_jabatan' => $id_jabatan
                ];
                $sqlDelete = $this->M_Proses->Delete('tb_jabatan' , $where);

                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataJabatan') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataJabatan') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){
                $id_jabatan = $this->input->post('id_jabatan');
                $nama_jabatan = $this->input->post('nama_jabatan');
                $data = [
                    'nama_jabatan' => $nama_jabatan
                ];

                $where = [
                    'id_jabatan' => $id_jabatan
                ];

                $sqlUpdate = $this->M_Proses->Update('tb_jabatan', $data, $where);
                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/Datajabatan') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/Datajabatan') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $nama_jabatan = $this->input->post('nama_jabatan');
                $data = [
                    'nama_jabatan' => $nama_jabatan
                ];

                $sqlInsert = $this->M_Proses->insert('tb_jabatan', $data);
                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/Datajabatan') ."');
                        </script>";
                   
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/Datajabatan') ."');
                        </script>";
                }
            }  
        }
    }
}