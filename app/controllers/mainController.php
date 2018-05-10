<?php

require_once 'app/models/Message.php';
require_once 'app/utils/Pagination.php';

class mainController extends Controller
{
    function __construct()
    {
        $this->model = new Message();
        $this->view = new View();
    }

    function index($page = 1)
    {

        $messages = $this->model->get_messages_limit($page);

        $total = $this->model->get_count();

        $pagination = new Pagination($total, $page, MESSAGES_PER_PAGE, '');

        $this->view->generate('main.php', 'template.php', array('messages' => $messages, 'pagination' => $pagination));
    }

    function store()
    {
        if (isset($_POST['send_message'])) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/form/securimage/securimage.php';

            $securimage = new Securimage();

            if ($securimage->check($_POST['captcha_code']) == false) {
                $_SESSION['err_msg'] = "Вы ввели неправильный код.<br />Попробуйте еще раз.";
                unset($_POST);
                header("Refresh:0; url=/form/");
            } else {

                if (!isset($_POST['name']) || !isset($_POST['message'])) {
                    $_SESSION['err_msg'] = "Вы заполнили не все поля";
                    unset($_POST);
                    header("Refresh:0; url=/form/");
                }

                $name = $_POST['name'];
                $message = $_POST['message'];
                $email = $_POST['email'];
                $dateSend = date('c');

                $headers = 'From: surokmar@gmail.com' . "\r\n" .
                    'Reply-To: surokmar@gmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $msg = "Здравствуйте, " . $name . "!\r\n" .
                    "Мы получили от вас сообщение:\r\n\"" .
                    $message . "\"\r\n" .
                    "Наш менеджер свяжется с Вами в течение трех дней.\r\n";

                if (mail($email, 'Вы отправили нам сообщение', $msg, $headers)) {
                    $_SESSION['scss_msg'] = "Ваше сообщение отправлено. Спасибо, что остаетесь с нами.";
                } else {
                    $_SESSION['err_msg'] = "Ошибка отправки сообщения";
                }

                $data = array(
                    'name' => $name,
                    'message' => $message,
                    'email' => $email,
                    'dateSend' => $dateSend
                );

                $this->model->create_message($data);

                unset($_POST);
                header("Refresh:0; url=/form/");
            }
        }
        //$this->view->generate('about.php', 'template.php');
    }
}
