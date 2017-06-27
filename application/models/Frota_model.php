<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database model to manage and list all cars in the database
 */
class Frota_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		//criar ligação com a base de dados
		$this->load->database('default');
	}
	/**
	 * Gets the car details filtered by id
	 * @param  array  $id - The car id
	 * @return        The car details
	 */
	public function getCar($id){
		$this->db->select("car.id, car.disponibilidade, car.matricula, car.modelo_id, car.cor_id, modl.nome as modelo, cor.nome as cor")
		->from("automoveis car")
		->join("modelos modl", "modl.id = car.modelo_id")
		->join("cores cor", "cor.id = car.cor_id")
		->join("fabricantes fab", "fab.id = modl.fabricante_id")
		->group_by("car.id")
		->where("car.id", $id);
		return $this->db->get()->row();
	}
	
	/**
	 * Gets the list filtered by modelo, matricula ou fabricante
	 * @param  array  $search - The search terms
	 * @return        The car list
	 */
	public function getCarList(array $search = array(), int $offset = 0, int $limit = ITEMS_PER_PAGE){
		$this->applyFilter($search);
		$this->db->select("car.id, car.disponibilidade, car.matricula, modl.nome as modelo, cor.nome as cor, fab.nome as fabricante");
		$this->db->from("automoveis car");
		$this->db->join("modelos modl", "modl.id = car.modelo_id");
		$this->db->join("cores cor", "cor.id = car.cor_id");
		$this->db->join("fabricantes fab", "fab.id = modl.fabricante_id");
		$this->db->group_by("car.id");
		$this->db->limit($limit, $offset);
		$this->db->order_by("car.id", "DESC");
		return $this->db->get()->result();
	}
	/**
	 * Gets the number of items available through the car search
	 * @param  array  $search - The search terms
	 * @return int    The car list
	 */
	public function getCarListCount(array $search = array()): int{
		$this->applyFilter($search);
		$this->db->select("car.id, car.disponibilidade, car.matricula, modl.nome as modelo, cor.nome as cor, fab.nome as fabricante");
		$this->db->from("automoveis car");
		$this->db->join("modelos modl", "modl.id = car.modelo_id");
		$this->db->join("cores cor", "cor.id = car.cor_id");
		$this->db->join("fabricantes fab", "fab.id = modl.fabricante_id");
		$this->db->group_by("car.id");
		return $this->db->count_all_results();
	}

	/**
	 * Apply filter to the search
	 * @param  array $search filtros de pesquisa
	 */
	public function applyFilter($search){
			//search for type selected, if required
		if ($search['search_type'] ?? false) {
			switch ($search['search_type']) {
				case 'model':
				$this->db->like("modl.nome", $search['search_term']);
				break;
				case 'mat':
				$this->db->like("car.matricula", $search['search_term']);
				break;
				case 'fab':
				$this->db->like("fab.nome", $search['search_term']);
				break;
			}
		}
	}

	/**
	 * Adicionar um novo veículo à base de dados
	 * @param  array  $data_inserted 	detalhes do veiculo a ser adicionado
	 * @return int                		id do veiculo adicionado
	 */
	public function createCar(array $data_inserted = array()):int {
		$data = array(
			"modelo_id" => $data_inserted['modelo'],
			"cor_id" => $data_inserted['cor'],
			"disponibilidade" => $data_inserted['disponibilidade'],
			"matricula" => $data_inserted['matricula']
			);
		
		$this->db->insert("automoveis", $data);
		//retornar o id do veiculo adicionado na base de dados
		return $this->db->insert_id();
	}
	
	/**
	 * Remove um veículo da base de dados e as suas dependencias
	 * @param  int $car_id 	id do veículo a ser removido
	 * @return 
	 */
	public function deleteCar($car_id){
		$this->db->delete("automoveis", array("id" =>$car_id, "disponibilidade" => 0));
		return $this->db->affected_rows();
	}

	/**
	 *  Atualiza os detalhes do veículo
	 * @param      mixed  $data Detalhes do veículo a ser atualizado
	 */
	public function update($data){
		//Verificar se a matricula já existe para outro veículo
		if($this->db->where("matricula", $data['matricula'])->where('id !=', $data['car_id'])
			->from("automoveis")->count_all_results() > 0){
			return false;
	}

	$carro = array(
		'cor_id'			=> $data['cor'],
		'disponibilidade' 	=> $data['disponibilidade'],
		'matricula'			=> $data['matricula']
		);

	$this->db->where('id', $data['car_id']);
	return $this->db->update("automoveis", $carro);
}

	/**
	 * Validar o formato da matricula (xx-00-00 ou 00-xx-00 ou 00-00-xx)
	 * @param  string $str valor introduzido no input da matricula
	 * @return boolean
	 */
	public function validateMatricula($str)	{
		return preg_match('/[0-9]{2}\-[a-zA-Z]{2}\-[0-9]{2}|[a-zA-Z]{2}\-[0-9]{2}\-[0-9]{2}|[0-9]{2}\-[0-9]{2}\-[a-zA-Z]{2}/', $str) > 0;
	}

}