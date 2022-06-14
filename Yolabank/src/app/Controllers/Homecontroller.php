<?php

namespace Bankas\Controllers;

use App\DB\Json;
use Bankas\App;
use Bankas\Messages as M;

class HomeController
{
    public function index()
    {
        return App::view('home', ['title' => 'Welcome', 'messages' => M::get()]);
    }
    public function list()
    {
        $user = Json::get()->showall();
        return App::view('list', ['title' => 'List', 'allAccounts' => $user]);
    }
    public function newAccount()
    {
        $account = [
            'surname' => ($_POST['surname'] ?? 0),
            'name' => ($_POST['name'] ?? 0),
            'userId' => ($_POST['userId'] ?? 0),
            'personalId' => ($_POST['personalId'] ?? 0),
            'accountNumber' => ($_POST['accountNumber'] ?? 0),
            'amount' => ($_POST['amount'] ?? 0)
        ];
        Json::get()->create($account);
        return App::redirect('list');
    }
    public function deleteAccount(string $id)
    {
        Json::get()->delete($id);
        return App::redirect('list');
    }
    public function toAdd(string $id)
    {
        $user = Json::get()->show($id);
        return App::view('edit', ['title' => 'User', 'allAccounts' => $user]);
    }
    public function add(string $id)
    {
        $clientData = Json::get()->show($id);
        $clientData['amount'] = $_POST['amount'];
        Json::get()->update($id, $clientData);
        return App::redirect('list');
    }
}
