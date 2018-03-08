<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getCliente($id_cliente)
  {
      $this->db->select('*');
      $this->db->from('clientes');
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

  public function getIdCliente($rut)
  {
      $this->db->select('id_cliente');
      $this->db->from('clientes');
      $this->db->where('rut', $rut);
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


  public function guardarCliente($data)
  {
     if (! $this->db->insert('clientes', $data ) ) {
        return false;
    }else {
        return true;
    }

  }

}
