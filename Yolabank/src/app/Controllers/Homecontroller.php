<?php

namespace Bankas\Controllers;

use Bankas\App;
use Bankas\Messages as M;

class HomeController
{
    public function index()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', ['title' => 'Alabama', 'list' => $list]);
    }
    public function indexJson()
    {
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::json(['title' => 'Alabama', 'list' => $list]);
    }
    public function form() //get 
    {
        return App::view('form', ['messages' => M::get()]);
    }
    public function doform() // post
    {
        M::add('Puiku', 'alert');
        M::add($_POST['alabama'], 'success');
        return App::redirect('forma');
    }
}
