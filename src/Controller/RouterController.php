<?php
// src/Controller/RouterController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RouterController extends AbstractController{

	/**
     * @Route("/")
     */
	public function index(){
		$dados = array(
			'title' => 'Escola Pé no Chão', 
			'description' => 'Escola de educação infantil',
			'link' => 'https://www.escolapenochao.com.br'
		);

        return $this->render('index.twig', $dados);
    }

	/**
     * @Route("/Contato-Escola-Pe-no-Chao")
     */
    public function contato(){

        $dados = array(
            'title' => 'Contato - Escola Pé no Chão', 
            'description' => 'Escola de educação infantil',
            'link' => 'https://www.escolapenochao.com.br/Contato-Escola-Pe-no-Chao'
        );

        return $this->render('contato.twig', $dados);
    }
}