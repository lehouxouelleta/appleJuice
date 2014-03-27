<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categorie_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function get_categorie() 
	{
		$this->db->select('*');
		$this->db->from('categorie');
		$this->db->order_by('ordre');
		$query = $this->db->get();
		return $query->result_array(); 
	}
}