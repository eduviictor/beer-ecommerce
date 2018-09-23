<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador do model da página home */
class Bebida extends CI_Controller {
	
	/* primeira função que é chamada */
	public function index(){

        redirect("/");

    }

    /* função para carregar a página de gerenciamento de bebidas */
    public function gerenciar_bebidas(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* carrega o model da página bebidas */
        $this->load->model("bebida_model", "bebida");

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_gbebidas'] = 'ul-marcada';

        /* carrega a base da página e a tela de dashboard como padrão */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/gerenciar_bebidas.php", $data);
        

          
    }

    /* função para carregar a página de edição de uma bebida */
    public function editar(){

        /* verifica se o usuários está logado */
		if(!$this->session->has_userdata("adm")) redirect("/");

		/* verifica se foi passado um id */
		if(!$id) redirect("/");

		/* Carregando o model produtos */
		$this->load->model("bebida_model", "bebida");

		/* fazendo consulta no bd para verificar se existe o registro */
		//$query = $this->produtos->getProdutoByID($id);

		/* verifica se existe */
		//if(!$query) redirect("/");

		/* criando array onde será guardado os dados (será passado para view) */
		//$dados["produto"] = $query;

		/* carregando a view */
		$this->load->view("editarProdutos");
    }



}
