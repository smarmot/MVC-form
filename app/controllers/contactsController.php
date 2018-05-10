<?php

class contactsController extends Controller
{
    function index()
    {
        $this->view->generate('contacts.php', 'template.php');
    }

}