<?php
  class Candidatos extends CI_Controller  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('Candidato');
    }

    public function nuevo(){
          $this->load->view('header');
          $this->load->view('candidatos/nuevo');
          $this->load->view('footer');
    }

    public function lista(){
          $data['candidatos']=$this->Candidato->obtenerTodo();
          $this->load->view('header');
          $this->load->view('candidatos/lista',$data);
          $this->load->view('footer');
    }

    public function reporte(){
          $this->load->view('header');
          $this->load->view('candidatos/reporte');
          $this->load->view('footer');
    }

    public function general(){
          $data['candidatos']=$this->Candidato->obtenerTodos();
          $this->load->view('header');
          $this->load->view('candidatos/general',$data);
          $this->load->view('footer');
    }

    public function tipo(){
          $data['candidatos']=$this->Candidato->obtenerTipo();
          $this->load->view('header');
          $this->load->view('candidatos/tipo',$data);
          $this->load->view('footer');
    }

    public function presidentes(){
          $data['candidatos']=$this->Candidato->obtenerPre();
          $this->load->view('header');
          $this->load->view('candidatos/presidentes',$data);
          $this->load->view('footer');
    }

    public function nacionales(){
          $data['candidatos']=$this->Candidato->obtenerNac();
          $this->load->view('header');
          $this->load->view('candidatos/nacionales',$data);
          $this->load->view('footer');
    }

    public function provinciales(){
          $data['candidatos']=$this->Candidato->obtenerPro();
          $this->load->view('header');
          $this->load->view('candidatos/provinciales',$data);
          $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoCandidato=array(
          "dignidad"=>$this->input->post('dignidad'),
          "cedula"=>$this->input->post('cedula'),
          "apellido"=>$this->input->post('apellido'),
          "nombre"=>$this->input->post('nombre'),
          "movimiento"=>$this->input->post('movimiento'),
          "provincia"=>$this->input->post('provincia'),
          "canton"=>$this->input->post('canton'),
          "tipo"=>$this->input->post('tipo'),
          "latitud"=>$this->input->post('latitud'),
          "longitud"=>$this->input->post('longitud')
        );
        if ($this->Candidato->insertar($datosNuevoCandidato)) {
          redirect('candidatos/lista');
        } else {
          echo "<h1>ERROR INSERTAR DATOS DEL CANDIDATO</h1>";
        }
      }

      public function eliminar($id_can){
        if ($this->Candidato->borrar($id_can)){
          redirect('Candidatos/lista');
        } else {
          echo "<h1>ERROR AL BORRAR CANDIDATO</h1>";
        }
      }

      //funcion que renderiza el formulario editar
      public function editar($id_can){
        $data["candidatoEditar"]=$this->Candidato->obtenerPorId($id_can);
        $this->load->view('header');
        $this->load->view('candidatos/editar',$data);
        $this->load->view('footer');
      }

      //Proceso de actualizacion
      public function procesarActualizacion()
      {
        $datosEditados=array(
          "dignidad"=>$this->input->post('dignidad'),
          "cedula"=>$this->input->post('cedula'),
          "apellido"=>$this->input->post('apellido'),
          "nombre"=>$this->input->post('nombre'),
          "movimiento"=>$this->input->post('movimiento'),
          "provincia"=>$this->input->post('provincia'),
          "canton"=>$this->input->post('canton'),
          "tipo"=>$this->input->post('tipo'),
          "latitud"=>$this->input->post('latitud'),
          "longitud"=>$this->input->post('longitud')
        );
        $id_can=$this->input->post("id_can");
        if ($this->Candidato->actualizar($id_can,$datosEditados)) {
          redirect('candidatos/lista');
        } else {
          echo "<h1>ERROR ACTUALIZAR DATOS DEL CANDIDATO</h1>";
        }
      }

  }
 ?>
