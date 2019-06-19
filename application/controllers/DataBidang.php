<?php

class DataBidang extends MY_Controller {

    public function __construct(){
        parent::__construct();
        
    }

    public function index(){

        $this->data['JudulWeb'] = 'Administrator';
        $this->data['PageView'] = 'administrator/pages/databidang/view'; 

        if(!$this->input->post()){
            $this->data['DT_Bidang'] = $this->M_Proses->GetData('tb_bidang');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else {
            if($this->input->post('delete')){
                $id_bidang = $this->input->post('id_bidang');
                $where = [
                    'id_bidang' => $id_bidang
                ];
                $sqlDelete = $this->M_Proses->Delete('tb_bidang' , $where);

                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){
                $id_bidang = $this->input->post('id_bidang');
                $nama_bidang = $this->input->post('nama_bidang');
                $data = [
                    'nama_bidang' => $nama_bidang
                ];

                $where = [
                    'id_bidang' => $id_bidang
                ];

                $sqlUpdate = $this->M_Proses->Update('tb_bidang', $data, $where);
                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $nama_bidang = $this->input->post('nama_bidang');
                $data = [
                    'nama_bidang' => $nama_bidang
                ];

                $sqlInsert = $this->M_Proses->insert('tb_bidang', $data);
                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                   
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/DataBidang') ."');
                        </script>";
                }
            }  
        }
    }
}