<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class contenu_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	public function get_contenu($limit = 3, $offset = 0) {
  $this->db->select('*');
    $this->db->from('contenu');
    $this->db->order_by('id');
    $this->db->limit($limit, $offset);
  $query = $this->db->get();
  if ($query->num_rows > 0) {
    return $query->result_array();
  }
  else {
    return false;
  }
 
}
}