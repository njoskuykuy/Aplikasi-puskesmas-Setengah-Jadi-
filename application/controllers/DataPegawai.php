<?php 

class DataPegawai extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->data['JudulWeb'] = 'Admistrator';
        $this->data['PageView'] = 'administrator/pages/datapegawai/view';
        

        if(!$this->input->post()){
            
            $this->data['DT_Pegawai'] = $this->M_Proses->QueryJoin('SELECT      tb_pegawai.id_pegawai, 
                                                                                tb_pegawai.nik , 
                                                                                tb_pegawai.nama_pegawai , 
                                                                                tb_pegawai.npwp , 
                                                                                tb_pegawai.tempat_lahir , 
                                                                                tb_pegawai.tanggal_lahir ,
                                                                                tb_jabatan.id_jabatan, 
                                                                                tb_jabatan.nama_jabatan,
                                                                                tb_bidang.id_bidang,
                                                                                tb_bidang.nama_bidang
                                                                    FROM tb_pegawai 
                                                                                JOIN tb_bidang ON tb_pegawai.id_bidang = tb_bidang.id_bidang
                                                                                JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
                                                                                        
                                                                                ');
            $this->data['DT_Bidang'] = $this->M_Proses->GetData('tb_bidang');
            $this->data['DT_Jabatan'] = $this->M_Proses->GetData('tb_jabatan');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else{
            if($this->input->post('delete')){
                $id_pegawai = $this->input->post('id_pegawai');
                $where =  [
                    'id_pegawai' => $id_pegawai
                ];

                $sqlDelete = $this->M_Proses->Delete('tb_pegawai' , $where);
                
                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){

                $id_pegawai = $this->input->post('id_pegawai');
                $nik = $this->input->post('nik');
                $nama_pegawai = $this->input->post('nama_pegawai');
                $npwp = $this->input->post('npwp');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                

                $data = [
                    'nik' => $nik,
                    'nama_pegawai' => $nama_pegawai,
                    'npwp' => $npwp,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir
                ];
                
                $where = [
                    'id_pegawai' => $id_pegawai
                ];
                
                $sqlUpdate = $this->M_Proses->Update('tb_pegawai' , $data , $where);

                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $nik = $this->input->post('nik');
                $nama_pegawai = $this->input->post('nama_pegawai');
                $npwp = $this->input->post('npwp');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $nama_bidang = $this->input->post('nama_bidang');
                $nama_jabatan = $this->input->post('nama_jabatan');

                $data = [
                    'nik' => $nik,
                    'nama_pegawai' => $nama_pegawai,
                    'npwp' => $npwp,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'id_bidang' => $nama_bidang,
                    'id_jabatan' => $nama_jabatan
                ];

                $sqlInsert = $this->M_Proses->Insert('tb_pegawai' , $data);

                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/DataPegawai') ."');
                        </script>";
                }



            }
        }
    }
}