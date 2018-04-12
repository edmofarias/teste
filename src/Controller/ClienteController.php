<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClienteController extends Controller
{
    /**
     * @Route("/cliente/cadastro", name="cliente")
     */
    public function cadastro()
    {

        return $this->render('cliente/cadastro.html.twig', [
            'controller_name' => 'ClienteController',
        ]);
    }

    /**
     * @Route("/cliente/listagem", name="cliente")
     */
    public function listagem()
    {
        /**
         * buscar dados no banco de dados aqui
         */
        
        $correios = new BuscarCep('sgdg');
        return $this->render('cliente/listagem.html.twig', [
            'controller_name' => 'ClienteController',
            'dados_pessoa' => [
                ['nome' => 'edmofarias', 'cpf' => '094409090995'],
                ['nome' => 'jonaa', 'cpf' => '124214'],
                ['nome' => 'jexisasas', 'cpf' => '3r3434'],
            ],
        ]);
    }

    /**
     * @Route("/cliente/dados/{id}", name="cliente")
     */
    public function cliente()
    {
        /**
         * buscar dados no banco de dados aqui
         */

        return new JsonResponse();
        
        
    }
}
