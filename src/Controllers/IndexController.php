<?php


namespace Controllers;

use serz\Framework\Controller\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->render('page.html', array("id" => "Index Page"));
    }

    public function getProduct($id)
    {
        $this->render('page.html', array("id" => $id));
    }
}