<?php


namespace Controllers;

use Mystore\Middleware\IsAdminMiddleware;
use Mystore\Middleware\OldMiddleware;
use Serz\Framework\Controller\Controller;
use Serz\Framework\Middleware\MiddlewareRunner;
use Serz\Framework\Request\Request;

class IndexController extends Controller
{
    public function index()
    {

        return $this->render('page.html', array("id" => "Index Page"));
    }

    public function getProduct($id)
    {
        return $this->render('page.html', array("id" => $id));
    }
}