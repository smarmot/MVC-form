<?php

class aboutController extends Controller
{
    function index()
    {
        $this->view->generate('about.php', 'template.php');
    }

    function history()
    {
        $this->view->generate('history.php', 'template.php');
    }

    function gallery()
    {
        $this->view->generate('gallery.php', 'template.php');
    }
}
