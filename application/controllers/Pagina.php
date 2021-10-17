<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$dados['titulo'] = 'Jornal de Patrocínio';
		$this->load->view("home", $dados);
	}

	public function covid()
	{
		$dados['titulo'] = 'Nesta quarta-feira, 13/10, Patrocínio terá jornada dupla de vacinação
		da 2° dose';
		$this->load->view("covid", $dados);
	}

	public function noticia()
	{
		$dados['titulo'] = 'Município de Patrocínio pagará R$ 500 mil por não tomar medidas contra trabalho
        infantil na cidade';
		$this->load->view("noticia", $dados);
	}

	public function prefeitura()
	{
		$dados['titulo'] = 'Notícias sobre a cidade de Patrocínio/MG';
		$this->load->view("prefeitura", $dados);
	}

	public function emprego()
	{
		$dados['titulo'] = 'Vagas de Empregos Disponível em Patrocínio/MG';
		$this->load->view("emprego", $dados);
	}

	public function sobre()
	{
		$dados['titulo'] = 'Informações Sobre o site';
		$this->load->view("sobre", $dados);
	}
	

}