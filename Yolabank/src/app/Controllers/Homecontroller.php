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
        // M::add($_POST['alabama'], 'success');
        return App::redirect('forma');
    }
    public function newAccount()
    {
        $accountNr = '';
        $client = '';
        $amount = 0;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!file_exists(__DIR__ . "/data/duomenys.json")) {
                file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([]));
            }
            $allAccounts = json_decode(file_get_contents(__DIR__ . "/data/duomenys.json"), TRUE);
            file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([
                ...$allAccounts, [...$_POST, "ID" => $client, "accountid" => $accountNr, "amount" => $amount]
            ]));
            return App::view('form', [...$_POST, "ID" => $client, "accountid" => $accountNr, "amount" => $amount]);
        }
    }
}
