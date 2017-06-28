<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frota extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('frota_model');
	}
	/**
	 * Apresentar a página com a lista de veiculos existentes na base de dados e os filtros de pesquisa
	 */
	public function pesquisar(){
		$this->load->helper('form');
		$this->load->library('pagination');

		//array com os valores pesquisados no formulario
		$search = array();

		$data["types"] = array(
			'model' => "Modelo",
			'mat' => "Matricula",
			'fab' => "Fabricante"
			);

		$search['search_type'] = $this->input->get('search_type');
		$search['search_term'] = $this->input->get('search_term');
		
		$form_url = "frota/pesquisar";
		if(count($search) > 0){
			$form_url.='?'.http_build_query($search, '', "&");
		}

		$offset = $this->input->get('page')??0;

		/*****************************************/
		//Verifica se foi enviada alguma mensagem de evento para a sessão
		if($this->session->flashdata('event')){
			$data['alert_msg'] = getAlertHTMLFromMsg($this->session->flashdata('event'));
		}
		/*****************************************/

		/* Pagination */
		$config['enable_query_string'] 	= true;
		$config['page_query_string'] 	= true;
		$config['base_url'] 			= base_url($form_url);
		$config['total_rows'] 			= $this->frota_model->getCarListCount($search);

		$this->pagination->initialize($config);

		//passar os valores pesquisados no formulario de volta para a vista pesquisar
		$data['search_type'] = $this->input->get('search_type');
		$data['search_term'] = $this->input->get('search_term');

		
		$data['search_total_results']	= $config['total_rows'];
		$data['search_results']			= $this->frota_model->getCarList($search, $offset);
		$data['search_pagination']		= $this->pagination->create_links();

		$data['active_item']	= 'frota';
		$data['content']		= 'frota/pesquisar';

		$this->load->view('init', $data);
	}

	/**
	 * Apresenta ecrã de confirmação de eliminação do veiculo
	 * @param   int $car_id  id do veiculo a eliminar
	 */
	public function remover($car_id)
	{
		$this->load->helper('form');

		$selected_car = $this->frota_model->getCar($car_id);

		//verificar se o carro está disponível ou ocupado
		if($selected_car->disponibilidade == CAR_IS_BUSY){
			$this->session->set_flashdata('event', array('type' => 'danger', 'text' => 'Não foi possível eliminar o veículo '.$selected_car->matricula.'. De momento não está disponível.'));
			redirect('frota/pesquisar/', 'refresh');

		}else{
			$data['car_id'] 	= $selected_car->id;
			$data['matricula'] 	= $selected_car->matricula;
			$data['active_item']	= 'frota';
			$data['content']		= 'frota/remover';

			$this->load->view('init', $data);
		}
	}

	/**
	 * Remoção do veiculo selecionado da base de dados
	 */
	public function delete()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		//Para eliminar o veiculo da base de dados é obrigatório a submissao do id do veiculo
		$this->form_validation->set_rules('id','id','required');

		$matricula = $this->frota_model->getCar($this->input->post('id'))->matricula;

		//Validar que o id do veiculo foi enviado
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('event', array('type' => 'danger', 'text' => 'Não foi possível eliminar o veículo '.$matricula.'.'));
		} else{
			if($this->frota_model->deleteCar($this->input->post('id'))){
				//veiculo eliminado com sucesso
				$this->session->set_flashdata('event', array('type' => 'success', 'text' => 'Veículo '.$matricula.' eliminado com sucesso.'));
				//redirect('frota/pesquisar/?delete=true', 'refresh');
			}else{
				//ocorreu um erro ao eliminar o veiculo
				$this->session->set_flashdata('event', array('type' => 'danger', 'text' => 'Não foi possível eliminar o veículo '.$matricula.'.'));
				//redirect('frota/pesquisar/?delete=false', 'refresh');
			}
			redirect('frota/pesquisar/', 'refresh');
		}
	}

	/**
	 * Apresentar formulário de criação/edição de veiculos
	 */
	public function adicionar()
	{
		$this->load->model('modelos_model');
		$this->load->model('cores_model');

		$this->load->helper('form');
		$this->load->library('form_validation');

		$validation_rules = array(
			'modelo'=>array(
				'field'=>'modelo',
				'label'=>'Modelo',
				'rules'=>'required',
				'errors'=>array(
					'required'=>'É obrigatório indicar um %s',
					)
				),
			'cor'=>array(
				'field'=>'cor',
				'label'=>'Cor',
				'rules'=>'required',
				'errors'=>array(
					'required'=>'É obrigatório indicar uma %s',
					)
				)
			);

		$data['models'] = $this->modelos_model->countModels();
		$data['colors'] = $this->cores_model->countColors();

		//Se estiver a editar, a matricula não pode ser validada como única
		if(empty($this->input->post("car_id"))){
			$validation_rules[] = array(
				'field' => 'matricula',
				'label' => 'Matricula',
				'rules' => array(
					'required',
					'exact_length[8]',
					'is_unique[automoveis.matricula]',
					array('validate_matricul',
						array($this->frota_model, 'validateMatricula'))),
				'errors' => array(
					'validate_matricul' => 'A %s deve respeitar o formato 00-XX-00 ou XX-00-00 ou 00-00-XX.',
					'required' => 'É obrigatório indicar a %s.',
					'exact_length' => 'A %s deve conter apenas 8 dígitos.',
					'is_unique' => 'A %s indicada já se encontra registada.'
					)
				);
		}else{
			$validation_rules[] = array(
				'field' => 'matricula',
				'label' => 'Matricula',
				'rules' => array(
					'required',
					'exact_length[8]',
					array('validate_matric',array($this->frota_model, 'validateMatricula'))),
				'errors' => array(
					'validate_matric' => 'A %s deve respeitar o formato 00-XX-00 | XX-00-00 | 00-00-XX.',
					'required' => 'É obrigatório indicar a %s.',
					'exact_length' => 'A %s deve conter apenas 8 dígitos.'
					)
				);
		}

		$this->form_validation->set_rules($validation_rules);

		if($this->form_validation->run() === FALSE){
			$data['car_id'] 		= "";

			$data['models_results'] = $this->modelos_model->getModelsList();
			$data['colors_results'] = $this->cores_model->getColorsList();

			$data['active_item'] 	= 'frota';
			$data['content'] 		= 'frota/adicionar';
			$this->load->view('init',$data);
		}
		else{
			//Se o car_id não estiver vazio
			if(!empty($this->input->post("car_id"))){
				//id nao esta vazio, efetuar uma edicao
				$result = $this->frota_model->update($this->input->post());
				$msg = array('type' => 'success', 'text' => '<i class=fa fa-check-circle" aria-hidden="true"></i> Alterações guardadas com sucesso.');
			}else{
				//id esta vazio, adicionar novo veiculo à tabela automoveis
				$result = $this->frota_model->createCar($this->input->post());
				$msg = array('type' => 'success', 'text' => 'Novo veiculo criado com sucesso.');
			}
			if($result){
				$this->session->set_flashdata('event', $msg);
			}else{
				$this->session->set_flashdata('event', array('type' => 'danger', 'text' => 'Ocorreu um erro.'));
			}
			redirect("frota/pesquisar/");
		}
	}

	/**
	 * Alterar detalhes de um veiculo e submeter à base de dados
	 */
	public function editar($car_id)
	{
		$this->load->model('modelos_model');
		$this->load->model('cores_model');
		$this->load->model('fabricantes_model');

		$this->load->helper('form');
		$this->load->library('form_validation');

		//Necessário definir uma regra para poder usar o form_validation 
		//na view de edicao
		$validation_rules = array(
			array(
				'field' => 'car_id',
				'rules' => 'required'
				),
			array(
				'field' => 'modelo',
				'rules' => 'required'
				),
			array(
				'field' => 'cor',
				'rules' => 'required'
				),
			array(
				'field' => 'matricula',
				'rules' =>  'required'
				),
			array(
				'field' => 'disponibilidade',
				'rules' => 'required'
				)
			);

		$data['models'] = $this->modelos_model->countModels();
		$data['colors'] = $this->cores_model->countColors();

		//carregar os dados do veiculo para ser editado
		$car = $this->frota_model->getCar($car_id);

		$car_details = array(
			'car_id'  			=> $car_id,
			'modelo'    		=> $car->modelo_id,
			'cor'    			=> $car->cor_id,
			'matricula'     	=> $car->matricula,
			'disponibilidade'	=> $car->disponibilidade
			);

		//carregar o form_validation com os dados do veiculo
		$this->form_validation->set_data($car_details);

		//carregar as regras
		$this->form_validation->set_rules($validation_rules);

		//aplicar "validacao"
		if($this->form_validation->run() === FALSE){

			$data['active_item'] = 'frota';
			$data['content']     = 'frota/pesquisar';
			$this->load->view('init',$data);
		}else{

			$data['car_id'] 		= $car_id;

			//carregar a view create com os dados do livro a ser editado
			$data['models_results'] = $this->modelos_model->getModelsList();
			$data['colors_results'] = $this->cores_model->getColorsList();

			$data['active_item'] = 'frota';
			$data['content']     = 'frota/adicionar';
			$this->load->view('init',$data);
		}
	}

}
