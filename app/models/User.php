<?php

class User extends Model
{
    protected $table = 'users';

    public function get_all()
    {
        return $this->get_data($this->table);
    }

    public function get_user_id($login, $password = null)
    {
        if ($password) {
            $cond = " AND `password` = '$password'";
        }

        $sql = "SELECT `id` FROM `users` WHERE `login` = '$login'" . $cond;

        return $this->exec_query($sql);
    }

    public function create_user($login, $password)
    {
        $sql = "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')";
    }
}