<?php

class View
{
    public $template_view = 'index';

    function generate($content_view, $template_view, $data = null)
    {

        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data, EXTR_OVERWRITE);
        }

        include 'app/views/' . $template_view;
    }
}
