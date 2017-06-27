<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database model to manage and list all car models in the database
 */
class Modelos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		//criar ligação com a base de dados
		$this->load->database('default');
	}
	/**
	 * Obter a lista dos modelos de carros
	 * @return        A lista de modelos de carros
	 */
	public function getModelsList(){
		$this->db->select("id, nome");
		$this->db->from("modelos");
		return $this->db->get()->result();
	}
	/**
	 * Obter o numero de modelos existentes na base de dados
	 * @return        numero de modelos existentes
	 */
	public function countModels(){
		$this->db->select("count(*) as count");
		$this->db->from("modelos");
		return $this->db->get()->row();
	}

	/**
	 * Obter a lista de modelos de um determinado fabricante
	 * @return        A lista dos modelos de carros do fabricannte X
	 */
	public function getModelsOfProducerList($id_fab){
		$this->db->select("fab.id, fab.nome, group_concat(md.id) as modelos_id, group_concat(md.nome) as modelo");
		$this->db->from("modelos md");
		$this->db->join("fabricantes fab", "fab.id = md.fabricante_id");
		$this->db->group_by('fab.id');
		$this->db->where("fab.id", $id_fab);
		return $this->db->get()->result();
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

	/**
	 * obter o modelo do veiculo com id = $car_id
	 * @param  int    $car_id
	 * @return
	 */
	public function getCarModelById(int $car_id){
		$this->db->select("car.modelo_id as id, mdl.nome as nome")
		->from("automoveis car")
		->join("modelos mdl", "mdl.id = car.modelo_id")
		->where("car.id", $car_id);
		return $this->db->get()->row();
	}
	
}
