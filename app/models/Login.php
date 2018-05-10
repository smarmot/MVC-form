<?php

class Login extends Model
{
    protected $table = 'users';

    public function get_all()
    {
        return $this->get_data($this->table);
    }
}