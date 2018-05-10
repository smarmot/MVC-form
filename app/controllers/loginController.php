<?php

require_once 'app/models/User.php';

class loginController extends Controller
{

    function __construct()
    {
        $this->model = new User();
        $this->view = new View();
    }

    function index()
    {
        $this->view->generate('login.php', 'template.php');
    }

    function check() {
        if(isset($_POST['auth'])) {
            $login = trim($_POST['login']);
            $password = md5(trim($_POST['password']));

            $data = $this->model->get_user_id($login, $password);

            if ($data) {
                $user = $data[0];
                $_SESSION['user_id'] = $user['id'];

                unset($_POST);
                header("Refresh:0; url=/form/");
            }
            else {
                $_SESSION['err_msg'] = "Неверный логин или пароль";
                header("Refresh:0; url=/form/login");
                //echo $login . ' ' . $password;
            }
        }
    }

    function logout() {
        unset($_SESSION['user_id']);
        header("Refresh:0; url=/form/");
    }

}