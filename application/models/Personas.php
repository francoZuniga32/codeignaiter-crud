<?php
class Personas extends CI_Model {

        public function __construct(){
                $this->load->database();
        }

        public function getPersonas($activo = FALSE){
               return $this->db->get_where('personas', array('activo' => $activo? 0: 1))->result_array();
        }

        public function getPersona($id, $activo = FALSE){
                return $this->db->get_where('personas', array('id' => $id, 'activo' => $activo? 0: 1))->result_array();
        }

        public function updatePersona($id, $dni, $nombre, $apellido, $telefono, $direccion){
                $data = array(
                        'dni' => $dni,
                        'nombre' => $nombre,
                        'apellido' => $apellido,
                        'telefono' => $telefono,
                        'direccion' => $direccion
                );
                $this->db->where('id', $id);
                $this->db->update('personas', $data);
        }

        public function insertPersona($dni, $nombre, $apellido, $telefono, $direccion){
                $data = array(
                        'dni' => $dni,
                        'nombre' => $nombre,
                        'apellido' => $apellido,
                        'telefono' => $telefono,
                        'direccion' => $direccion
                );

                $this->db->insert('personas', $data);
        }

        public function activePersona($id, $activo = FALSE){
                $this->db->where('id', $id);
                $this->db->update('personas', array('activo' => $activo? 0: 1));
        }
}