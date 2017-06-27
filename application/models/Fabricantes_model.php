<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database model to manage and list all car producers in the database
 */
class Fabricantes_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		//criar ligação com a base de dados
		$this->load->database('default');
	}
	
	/**
	 * Obter a lista de fabricantes de carros
	 * @return        A lista de fabricantes de carros
	 */
	public function getProducersList(){
		$this->db->select("id, nome");
		$this->db->from("fabricantes");
		return $this->db->get()->result();
	}
	
}
