<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificado extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getCertificados($cliente)
  {
      $this->db->select('CE.*');
      $this->db->select('CA.categoria');
      $this->db->from('certificados as CE');
      $this->db->where('CE.id_cliente', $cliente);
      $this->db->join('categorias as CA', 'CE.id_categoria = CA.id_categoria', 'left');
      $this->db->where('CE.estado', 1);
      $this->db->order_by('CE.fecha_emision', 'desc');

      $q = $this->db->get();

       if ( $q->num_rows() > 0 )
      {
         $resultado = $q->result();
         return $resultado;

      } else {

         return false;

      }
  }

  public function buscarCertificado($id_cliente)
  {
      $this->db->select('*');
      $this->db->from('certificados');
      $this->db->where('id_cliente', $id_cliente);
      $this->db->where('estado', 1);

      $q = $this->db->get();

       if ( $q->num_rows() > 0 )
      {
         $resultado = $q->result();
         return $resultado[0];

      } else {

         return false;

      }
  }

}
