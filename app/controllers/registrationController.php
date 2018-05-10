<?php

require_once 'app/models/User.php';

class registrationController extends Controller
{
    function __construct()
    {
        $this->model = new User();
        $this->view = new View();
    }

    function index()
    {
        $this->view->generate('registration.php', 'template.php');
    }

    function store()
    {
        if (isset($_POST['registration'])) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/form/securimage/securimage.php';

            $securimage = new Securimage();

            if ($securimage->check($_POST['captcha_code']) == false) {
                $_SESSION['err_msg'] = "Вы ввели неправильный код.<br />Попробуйте еще раз.";
                unset($_POST);
                header("Refresh:0; url=/form/registration");
            } else {

                $login = $_POST['login'];
                $password = trim($_POST['password']);
                $confirmPassword = trim($_POST['confirmPassword']);

                if ($password == $confirmPassword) {

                    $data = $this->model->get_user_id($login);

                    if (!$data) {
                        $mdPassword = md5($password);

                        $this->model->create_user($login, $mdPassword);
                        //$data = $this->model->exec_query($sql); если так, то можно вернуть id добавленного пользователся, но это не точно

//                        if ($data) {
                        unset($_POST);
                        $_SESSION['scss_msg'] = "Вы успешно зарегистрировались.";
                        header("Refresh:0; url=/form/login"); // можно же как-то роуты добавить
//                        }
                    } else {
                        $_SESSION['err_msg'] = "Пользователь с указанным логином уже зарегистрирован.";
                        unset($_POST);
                        header("Refresh:0; url=/form/registration");
                    }

                } else {
                    $_SESSION['err_msg'] = "Введеные пароли не совпадают.";
                    header("Refresh:0; url=/form/registration");
                }
//                unset($_POST);
//                header("Refresh:0; url=/form/login");
            }
        }
        //$this->view->generate('about.php', 'template.php');
    }
}