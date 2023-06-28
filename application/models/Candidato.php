<?php
  class Candidato extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db
                ->insert("candidatos",
                $datos);
    }

    function obtenerTodo(){
      $listadoCandidatos=
      $this->db->get("candidatos");
      //VALIDACION
      if ($listadoCandidatos
        ->num_rows()>0){
          return $listadoCandidatos->result();
      } else {
        return false;
      }
    }


    function borrar($id_can){
      $this->db->where("id_can",$id_can);
      return $this->db->delete("candidatos");
    }

  //FUNCION PARA CONSULTAR UN CANDIDATOS EN ESPECIFICO
  function obtenerPorId($id_can)
  {
    $this->db->where("id_can", $id_can);
    $candidatos = $this->db->get("candidatos");
    if ($candidatos->num_rows() > 0) {
      //un solo instructor con row
      return $candidatos->row();
    }
    return false;
  }

  //FUNCION PARA ACTUALIZAR UN INSTRUCTOR , recibe id dle instructor nuevos datos y se envia a actualizar
  function actualizar($id_can, $datos)
  {
    $this->db->where("id_can", $id_can);
    return $this->db->update('candidatos', $datos);
  }




//MAPA GENERAL
    function obtenerTodos(){
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
          return $listadoCandidatos->result();
        }
        return false;
      }
      //MAPA GENERAL
          function obtenerTipo(){
              $listadoCandidatos=$this->db->get("candidatos");
              if ($listadoCandidatos->num_rows()
                  > 0) {
                return $listadoCandidatos->result();
              }
              return false;
            }
//MAPA PRESIDENTES
    function obtenerPre(){
        $Value = "Presidente";
        $this->db->where("dignidad",$Value);
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
          return $listadoCandidatos->result();
          }
          return false;
        }
//MAPA PROVINCIALES
    function obtenerPro(){
        $Value = "Asambleista Provincial";
        $this->db->where("dignidad",$Value);
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
              return $listadoCandidatos->result();
            }
            return false;
          }
//MAPA NACIONALES
      function obtenerNac(){
          $Value = "Asambleista Nacional";
          $this->db->where("dignidad",$Value);
          $listadoCandidatos=$this->db->get("candidatos");
          if ($listadoCandidatos->num_rows()
              > 0) {
                return $listadoCandidatos->result();
              }
              return false;
            }


  }//Cierre de la clase

 ?>
