<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificadoController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('America/Santiago');

    $this->load->model('cliente');
    $this->load->model('certificado');
    $this->load->model('categoria');
    $this->load->model('curso');
    }

    function index()
    {
        $this->load->view('template/header');
        $this->load->view('certificado/buscador');
        $this->load->view('template/footer');
    }

    public function buscarCertificado()
    {
        $rut_busqueda = $this->input->post('codigo');

        $caracteres = array('-',',', '.', ' ');
        $rut = str_replace($caracteres, '' , $rut_busqueda);

        $id_cliente = $this->cliente->getIdCliente($rut);

        if (! $this->certificado->buscarCertificado($id_cliente->id_cliente) ) {
            $mensaje = 'No se ha encontrado un certificado con ese codigo';
            //$this->session->set_flashdata('error', $mensaje);
			redirect( 'certificado' );
        }else {
            $mensaje = 'se ha encontrado un cliente';
            //$this->session->set_flashdata('error', $mensaje);
			redirect( 'certificado/mostar/'. $id_cliente->id_cliente );
        }

    }

    public function mostrarCertificado($id_cliente)
    {
        $certificados = $this->certificado->getCertificados($id_cliente);

        $cliente = $this->cliente->getCliente($id_cliente);

        $certificadosCursos;

        foreach ($certificados as $certificado) {

            $certificadosCursos[] = [
                'certificado' => $certificado,
                'cursos' => $this->curso->getSugerencias($certificado->id_categoria)
            ];
        }

        $data = array(
            'cliente' => $cliente,
            'certificados' => $certificadosCursos
        );

        //echo "<pre>";
        //print_r($data);

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('certificado/vista_certificado', $data);
        $this->load->view('template/footer');
    }

    public function buscarExistente()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('certificado/buscar_existente');
        $this->load->view('template/footer');
    }

    public function ingresarCertificado()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('certificado/subir_certificado');
        $this->load->view('template/footer');
    }

    public function guardarCertificado()
    {
        $codigo             =   $this->input->post('codigo_certificado');
        $nombre_curso       =   $this->input->post('nombre_curso');
        $fecha_emision      =   $this->input->post('fecha_emision');
        $fecha_vencimiento  =   $this->input->post('fecha_vencimiento');
        $id_categoria       =   $this->input->post('id_categoria');

        $rut                =   $this->input->post('rut');
        $nombre             =   $this->input->post('nombre');
        $apellido           =   $this->input->post('apellido');
        $fecha_nacimiento   =   $this->input->post('fecha_nacimiento');
        $razon_social       =   $this->input->post('razon_social');

        $id_cliente;

        if (! $this->cliente->getIdCliente($rut)) {

            $data = array(
                'rut' => $rut,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'fecha_nacimiento' => $fecha_nacimiento,
                'razon_social' => $razon_social,
             );

            if (! $this->cliente->guardarCliente($data)) {
                $error = $this->db->_error_message();
                $mensaje = 'Ha ocurrido un error, vuelva a intentarlo.';
                //$this->session->set_flashdata('error', $mensaje);

            }else {
                $id_cliente = $this->cliente->getIdCliente($rut);
                $mensaje = 'Cliente Guardado';
            }
        }//end if


    }//end funcion guardarCertificado()

    public function mostrarClienteExistente($id_cliente)
    {

        $cliente = $this->cliente->getCliente($id_cliente);
        $categorias = $this->categoria->getAll();

        $data = array(
            'cliente' => $cliente,
            'categorias' => $categorias
        );

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('certificado/clienteexistente_subir_certificado', $data);
        $this->load->view('template/footer');

    }

    public function mostrarClienteNuevo()
    {
        $categorias = $this->categoria->getAll();

        $data = array(
            'categorias' => $categorias
        );

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('certificado/subir_certificado', $data);
        $this->load->view('template/footer');
    }
}
