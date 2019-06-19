<?php

class M_Proses extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function GetData($table){
       return  $this->db->get($table)->result();
    }

    public function GetDataById($table , $where){
        return $this->db->where($where)->get($table)->result();
    }

    public function QueryJoin($query){
        return $this->db->query($query)->result();
    }

    public function Insert($table ,$data){
        return $this->db->insert($table ,$data);
    }
    
    public function Update($table ,$data , $where){
        return $this->db->where($where)->update($table ,$data);
    }

    public function Delete($table ,$where){
        return $this->db->where($where)->delete($table);
    }
    
    // cek login
    public function cek_login($table, $where){
        return $this->db->get_where( $table , $where);
    }
}