<?php 
 
class M_data extends CI_Model{

	private $table1 = 'add_cluster';
	private $table2 = 'cluster147';
	private $table3 = 'cagent';
	private $table4 = 'synonyms';

	function get_data_agname($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'agname'");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		} else {
			return FALSE;
		}
	}
	function get_data_role($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'role'");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		} else {
			return FALSE;
		}
	}
	function get_data_auxreason($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'aux_rsn' ");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		}elseif($id == 0){
			$out = (object)[
				'item_name' => 'sistem',
				'value' => '0',
			];
			return $out;
		}else{
			return FALSE;
		}
	}
	function get_data_direction($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'ag_dir' ");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		}elseif($id == 0){
			$out = (object)[
				'item_name' => '0',
				'value' => '0',
			];
			return $out;
		}else{
			return FALSE;
		}
	}
	function get_data_vdn($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'vdn'");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		} else {
			return FALSE;
		}
	}
	function get_data_split($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'split'");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		} else {
			return FALSE;
		}
	}
	function get_data_workmode($id){
		$this->db->from($this->table4);
		$this->db->where("acd_no = 1 AND item_type = 'workmode'");
		$this->db->where('value',$id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$out = $query->row();
			return $out;
		} else {
			return FALSE;
		}
	}

    function getbycluster($where){
        $this->db->from($this->table2);
        $this->db->join($this->table3, 'cagent.extension = cluster147.extension');
	 	$this->db->join($this->table4 , 'synonyms.value = cagent.logid');
	 	$lup = $this->db->query('SELECT MAX(lup) AS `lup` FROM `cagent`')->row()->lup;
        $this->db->where($where);
        $this->db->where('lup',$lup);
        return $this->db->get();
    }
    function getbyextension($where){
        
        $this->db->from($this->table2);
        $this->db->join($this->table3, 'cagent.extension = cluster147.extension');
	 	$this->db->join($this->table4 , 'synonyms.value = cagent.logid');
	 	$lup = $this->db->query('SELECT MAX(lup) AS `lup` FROM `cagent`')->row()->lup;
        $this->db->where($where);
        $this->db->where('lup',$lup);
        return $this->db->get();
    }

	function tampil_semua_cluster(){
    	$lup = $this->db->query('SELECT MAX(lup) AS `lup` FROM `cagent`')->row()->lup;
    	$this->db->FROM('cagent');
    	$this->db->JOIN('cluster147', 'cagent.extension = cluster147.extension');
		$this->db->where('lup',$lup);
		return $this->db->get();
		}
	function tampil_lup(){
		$this->db->from($this->table1);
		$this->db->join($this->table2 ,  'cluster147.cluster = add_cluster.cluster' );
		$this->db->join($this->table3 ,  'cagent.extension = cluster147.extension' );
		$lup = $this->db->query('SELECT MAX(lup) AS `lup` FROM `cagent`')->row()->lup;
		$this->db->where('lup',$lup);
		return $this->db->get();
		
	}
	function updateCluster($where, $data)
    {
        $this->db->where($where);
        if ($this->db->update($this->table1, $data) == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function tampil_per_cluster($where){
    	$lup = $this->db->query('SELECT MAX(lup) AS `lup` FROM `cagent`')->row()->lup;
    	$this->db->FROM('cagent');
    	$this->db->JOIN('cluster147', 'cagent.extension = cluster147.extension');
		$this->db->where($where);
		$this->db->where('lup',$lup);
		return $this->db->get();
    }
}