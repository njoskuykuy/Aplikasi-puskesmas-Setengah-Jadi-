<?php

class DataPoli extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
    }

    public function index(){

        $this->data['JudulWeb'] = 'Administrator';
        $this->data['PageView'] = 'administrator/pages/datapoli/view'; 

        if(!$this->input->post()){
            $this->data['DT_Poli'] = $this->M_Proses->GetData('tb_poli');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else {
            if($this->input->post('delete')){
                $id_poli = $this->input->post('id_poli');
                $where = [
                    'id_poli' => $id_poli
                ];
                $sqlDelete = $this->M_Proses->Delete('tb_poli' , $where);

                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){
                $id_poli = $this->input->post('id_poli');
                $nama_poli = $this->input->post('nama_poli');
                $ruang_poli = $this->input->post('ruang_poli');
                $data = [
                    'nama_poli' => $nama_poli,
                    'ruang_poli' => $ruang_poli
                ];

                $where = [
                    'id_poli' => $id_poli
                ];

                $sqlUpdate = $this->M_Proses->Update('tb_poli', $data, $where);
                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $nama_poli = $this->input->post('nama_poli');
                $ruang_poli = $this->input->post('ruang_poli');
                $data = [
                    'nama_poli' => $nama_poli,
                    'ruang_poli' => $ruang_poli
                ];

                $sqlInsert = $this->M_Proses->insert('tb_poli', $data);
                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                   
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/DataPoli') ."');
                        </script>";
                }
            }  
        }
    }
}