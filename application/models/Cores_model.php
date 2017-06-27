<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database model to manage and list all colors in the database
 */
class Cores_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		//criar ligação com a base de dados
		$this->load->database('default');
	}
	/**
	 * Obter a lista de cores de carros
	 * @return        A lista de cores de carros
	 */
	public function getColorsList(){
		$this->db->select("id, nome");
		$this->db->from("cores");
		return $this->db->get()->result();
	}
	/**
	 * Obter o numero de cores existentes na base de dados
	 * @return        numero de cores existentes
	 */
	public function countColors(){
		$this->db->select("count(*) as count");
		$this->db->from("cores");
		return $this->db->get()->row();
	}

	/**
	 * obter a cor do veiculo com id = $car_id
	 * @param  int    $car_id
	 * @return
	 */
	public function getCarColorById(int $car_id){
		$this->db->select("car.cor_id as id, cor.nome as nome")
		->from("automoveis car")
		->join("cores cor", "cor.id = car.cor_id")
		->where("car.id", $car_id);
		return $this->db->get()->row();
	}
	
}
