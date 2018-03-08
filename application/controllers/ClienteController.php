<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cliente');
    $this->load->model('certificado');
  }

  function index()
  {
      $id_cliente = 1;
      $cliente = $this->cliente->getCliente($id_cliente);

      $data = array(
          'cliente' => $cliente,
      );

      echo "<pre>";
      print_r($data);
  }

  public function buscarCliente()
  {
      $rut_busqueda = $this->input->post('cliente_buscar');

      $caracteres = array('-',',', '.' );
      $rut = str_replace($caracteres, '' , $rut_busqueda);

      $cliente = $this->cliente->getIdCliente($rut);

      if ($cliente->id_cliente != null) {
          redirect('certificado/nuevo_certificado1/' . $cliente->id_cliente );
      }else {
          redirect('certificado/nuevo_certificado2');
      }

  }

}
