<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
        /**
         * Apresentar a Homepage
         */
        public function index(){
        	$data['active_item']	= 'home';
        	$data['content']	= 'home';
        	$this->load->view('init', $data);
        }
        /**
         * Apresentar página com principais informações da "empresa" (missao,objetivos,historia,etc)
         */
        public function about(){
        	$data['active_item']	= 'about';
        	$data['content']	= 'about';
        	$this->load->view('init', $data);
        }
        /**
         * Página de contacto, que disponibiliza o envio de emails à administração
         */
        public function contact(){
        	$this->load->helper('form');
        	$this->load->library('form_validation');
        	$this->load->library('email');

		// Configurações da library Email
        	$config['useragent']    = 'CodeIgniter';
        	$config['smtp_host']    = 'ssl://smtp.googlemail.com';
        	$config['smtp_port']    = '465';
        	$config['smtp_user']    = 'nadiap.info@gmail.com';
        	$config['protocol']     = 'smtp';
        	$config['smtp_host']    = 'localhost';
        	$config['smtp_port']    = '25';
        	$config['smtp_user']    = 'demo@localhost';
        	$config['smtp_pass']    = '';
        	$config['charset']      = 'utf-8';
        	$config['newline']  	  = "\r\n";
        	$config['mailtype'] 	  = 'html';   

        	$this->email->initialize($config);

        	$validation_rules= array(
        		'nome'=>array(
        			'field'=>'nome',
        			'label'=>'Nome',
        			'rules'=>'required|min_length[3]|max_length[64]',
        			'errors'=>array(
        				'required'=>'É obrigatório indicar um %s',
        				'min_length'=>'O %s tem de ter pelo menos 3 caracteres.',
        				'max_length'=>'O %s tem de ser menor que 64 caracteres.'
        				)
        			),

        		'email'=>array(
        			'field'=>'email',
        			'label'=>'Email',
        			'rules'=>'required|valid_email',
        			'errors'=>array(
        				'required'=>'É obrigatório indicar um %s.',
        				'valid_email'=>'O %s que introduziu não é válido.',
        				)
        			),

        		'mensagem'=>array(
        			'field'=>'mensagem',
        			'label'=>'Mensagem',
        			'rules'=>'required|max_length[500]',
        			'errors'=>array(
        				'required'=>'É obrigatório indicar uma %s.',
        				'max_length'=>'A %s tem de ser menor que 500 caracteres.'
        				)
        			));

        	$this->form_validation->set_rules($validation_rules);
        	if($this->form_validation->run() === FALSE){

        		$data['active_item']	= 'contact';
        		$data['content']		= 'contact';
        		$this->load->view('init', $data);
        	}else{
        		$this->email->from('demo@localhost', $this->input->post('nome'));
        		$this->email->to('demo@localhost');

        		$this->email->subject('codeIgniter email');
        		$this->email->message($this->input->post('mensagem'));

        		if($this->email->send()){
        			$this->session->set_flashdata('event', array('type' => 'success', 'text' => 'Email enviado com sucesso.'));
        		}else{
        		      //show_error($this->email->print_debugger());
        			$this->session->set_flashdata('event', array('type' => 'danger', 'text' => 'Não foi possível enviar o email.'));
        		}

        		redirect('frota/pesquisar/', 'refresh');

        	}
        }
    }

