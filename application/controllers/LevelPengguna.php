<?php
class LevelPengguna extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['JudulWebsite'] = "Administrator";
        $this->data['PageView'] = "administrator/pages/levelpengguna/view";
        $this->data['DT_LevelPengguna'] = $this->M_Proses->GetData('tb_level_pengguna');
        if(!$this->input->post()){
            $this->load->view($this->data['UrlTemplate'], $this->data);
        }else if($this->input->post('insert')){
            $nama_level = $this->input->post('nama_level');
            $data = array(
                'nama_level' => $nama_level
            );
            
            $sqlInsert = $this->M_Proses->insert('tb_level_pengguna', $data);
            if($sqlInsert){
                echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }else{
                echo "<script>
                            alert('Data Gagal di tambahkan');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }
        }else if($this->input->post('update')){
            $id_level_pengguna = $this->input->post('id_level_pengguna');
            $nama_level = $this->input->post('nama_level');
            $data = array(
                'nama_level' => $nama_level
            );

            $where = array(
                'id_level_pengguna' => $id_level_pengguna
            );

            $sqlUpdate = $this->M_Proses->Update('tb_level_pengguna', $data , $where);
            if($sqlUpdate){
                echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }else{
                echo "<script>
                            alert('Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }
        }else if($this->input->post('delete')){
            $id_level_pengguna = $this->input->post('id_level_pengguna');
            $where = array(
                'id_level_pengguna' =>  $id_level_pengguna
            );

            $sqlDelete = $this->M_Proses->Delete('tb_level_pengguna' , $where);
            if($sqlDelete){
                echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }else{
                echo "<script>
                            alert('Data gagal di hapus');
                            window.location.href=('". base_url('index.php/LevelPengguna') ."');
                        </script>";
            }
        }
    }
}