<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works_model extends CI_Model {

	public function getWorksList($row_per_page, $row_no){
	    	$query = $this->db->SELECT('w_id, name, website, image, created_at')
	    	->ORDER_BY('created_at', 'asc')
			->LIMIT($row_per_page, $row_no)
			->GET('works_tbl')->result_array();
			$result = array();

			foreach($query as $q){
				$array = array(
					'name'=>$q['name'],
					'website'=>$q['website'],
					'image'=>$q['image'],
					'category'=>$this->db->SELECT('category')->WHERE('w_id', $q['w_id'])->GET('category_tbl')->result_array(),
					'created_at'=>date('m/d/Y h:i A', strtotime($q['created_at'])),
				);
				array_push($result, $array);
			}
		return $result;
    }
    public function getWorksListCount(){
    	return $this->db->GET('works_tbl')->num_rows();
    }
}