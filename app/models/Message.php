<?php

class Message extends Model
{
    protected $table = 'messages';

    public function get_all()
    {
        return $this->get_data($this->table);
    }

    public function get_count()
    {
        $sql = "SELECT COUNT(id) cnt FROM `messages`";
        $data = $this->exec_query($sql);

        return $data[0]['cnt'];
    }

    public function create_message($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $dateSend = $data['dateSend'];

        $sql = "INSERT INTO `messages` (`name`, `email`, `message`, `date_send`) VALUES ('$name', '$email', '$message', '$dateSend')";

        return $this->exec_query($sql);
    }

    public function get_messages_limit($page = 1)
    {
        $limit = MESSAGES_PER_PAGE;
        $offset = ($page - 1) * MESSAGES_PER_PAGE;

        $messages = $this->get_by_limit('messages', $limit, $offset);

        return $messages;
    }
}