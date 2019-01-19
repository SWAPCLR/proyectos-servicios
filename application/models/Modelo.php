<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    function createData(){
        $data = array(
            'nombre_cliente'=>$this->input->post('nombre_cliente'),
            'contacto'=>$this->input->post('contacto'),
            'tel_oficina'=>$this->input->post('tel_oficina'),
            'direccion'=>$this->input->post('direccion')
        );
        $this->db->insert('prueba_servicios', $data);
    }
}
