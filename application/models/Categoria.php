<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  public function getAll()
  {
      $this->db->select('*');
      $this->db->from('categorias');

      $q = $this->db->get();

      if ($q->num_rows() < 1) {
         return false;
      } else {
         return $q->result();
      }
  }

  public function getSugerencias($id_categoria)
  {
      $this->db->select('*');
      $this->db->from('categorias');
      $this->db->where('id_categorias');

      $q = $this->db->get();

      if ($q->num_rows() < 1) {
         return false;
      } else {
         return $q->result();
      }
  }

}
