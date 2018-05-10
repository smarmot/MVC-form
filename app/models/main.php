<?php

class main extends Model
{
    protected $table = 'messages';

    public function get_all()
    {
        return $this->get_data($this->table);
    }
}