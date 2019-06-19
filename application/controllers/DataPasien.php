<?php
class DataPasien extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['JudulWebsite'] = "Administrator";
        $this->data['PageView'] = "administrator/pages/datapasien/view";
        $this->data['DT_Pasien'] = $this->M_Proses->GetData('tb_data_pasien');

        if(!$this->input->post()){
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else if($this->input->post('insert')){
            $no_rekamedis = BuatKode();
            $no_ktp = $this->input->post('no_ktp');
            $no_bpjs = $this->input->post('no_bpjs');
            $nama_pasien = $this->input->post('nama_pasien');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $alamat = $this->input->post('alamat');
            $status_pasien = $this->input->post('status_pasien');


            $data = array(
                'no_rekamedis' => $no_rekamedis,
                'no_ktp' => $no_ktp,
                'no_bpjs' => $no_bpjs,
                'nama_pasien' => $nama_pasien,
                'jenis_kelamin' => $jenis_kelamin,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'status_pasien' => $status_pasien
            );

            

            $sqlInsert = $this->M_Proses->Insert('tb_data_pasien', $data);
            if($sqlInsert){
                echo "<script>
                        alert('Data berhasil di Tembahkan');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }else{
                echo "<script>
                        alert('Data gagal di Tembahkan');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }
        }else if($this->input->post('update')){
            $no_rekamedis = BuatKode();
            $no_ktp = $this->input->post('no_ktp');
            $no_bpjs = $this->input->post('no_bpjs');
            $nama_pasien = $this->input->post('nama_pasien');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $alamat = $this->input->post('alamat');
            $status_pasien = $this->input->post('status_pasien');
            $id_data_pasien = $this->input->post('id_data_pasien');

            $data = array(
                'no_rekamedis' => $no_rekamedis,
                'no_ktp' => $no_ktp,
                'no_bpjs' => $no_bpjs,
                'nama_pasien' => $nama_pasien,
                'jenis_kelamin' => $jenis_kelamin,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'status_pasien' => $status_pasien
            );

            $where = array(
                'id_data_pasien' => $id_data_pasien
            );

            $sqlUpdate = $this->M_Proses->Update('tb_data_pasien', $data, $where);
            if($sqlUpdate){
                echo "<script>
                        alert('Data berhasil di Ubah');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }else{
                echo "<script>
                        alert('Data Gagal di Ubah');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }

        }else if($this->input->post('delete')){
            $id_data_pasien = $this->input->post('id_data_pasien');
             
            $where = array(
                'id_data_pasien' => $id_data_pasien
            );

            $sqlDelete = $this->M_Proses->Delete('tb_data_pasien' , $where);
            if($sqlDelete){
                echo "<script>
                        alert('Data berhasil Terhapus');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }else{
                echo "<script>
                        alert('Data Gagal Terhapus');
                        window.location.href=('". base_url('index.php/DataPasien') ."');
                    </script>";
            }
        }
    }
}