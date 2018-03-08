<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificado extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getCertificado($codigo)
  {
      $this->db->select('CE.*');
      $this->db->select('CL.*');
      $this->db->from('certificados as CE');
      $this->db->where('CE.codigo', $codigo);
      $this->db->join('clientes as CL', 'CE.id_cliente = CL.id_cliente', 'left');
      $this->db->where('CE.estado', 1);

      $q = $this->db->get();

       if ( $q->num_rows() > 0 )
      {
         $resultado = $q->result();
         return $resultado[0];

      } else {

         return false;

      }
  }

  public function buscarCertificado($codigo)
  {
      $this->db->select('*');
      $this->db->from('certificados');
      $this->db->where('codigo', $codigo);
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
