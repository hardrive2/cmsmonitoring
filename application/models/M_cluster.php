<?php
defined("BASEPATH") or die("No Direct Access Allowed");

class M_cluster extends CI_Model
{
    private $_table = 'add_cluster';
    private $_table2 = 'cluster147';


    function getcluster()
    {
        return $this->db->get($this->_table)->result();
    }
    function getextension()
    {
        return $this->db->get($this->_table2)->result();
    }
    function get1cluster($where)
    {
        return $this->db->get_where($this->_table, $where)->result();
    }
    function get1extension($where)
    {
        return $this->db->get_where($this->_table2, $where)->result();
    }
    function getdata($where)
    {
        return $this->db->get_where($this->_table, $where)->result();
    }
    function addcluster($data)
    {
        if($this->db->insert($this->_table,$data) == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function addextension($data)
    {
        if($this->db->insert($this->_table2,$data) == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete_extension($where){
        if($this->db->delete($this->_table2, $where) == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete_cluster($where){
        if($this->db->delete($this->_table, $where) == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
