<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }

    public function Index() {
        $data['title']='Iniciar Sesion';
        $this->views->getView('principal','index',$data);
    }

    function Validar() { 
         $email = $_POST['email'];
         $password = $_POST['password'];

         $data = $this->model->getUsuario($email);
         //print_r($data); //muy valioso en PHP

         if (!empty($data)) {
            if (password_verify($password,$data['clave'])) { 
                $_SESSION['id']= $data['id'];
                $_SESSION['correo']= $data['correo'];
                $res = array('tipo'=> 'success','mensaje' => 'Bienvenido');

            }else{
                $res = array('tipo'=> 'warning','mensaje' => 'Contraseña Incorrecta');
            }
         }else{
            $res = array('tipo'=> 'warning','mensaje' => 'No existe  Incorrecta');

         }

         echo json_encode($res,JSON_UNESCAPED_UNICODE);
         die();
    }
}
