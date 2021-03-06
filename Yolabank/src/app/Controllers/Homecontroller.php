<?php

namespace Bankas\Controllers;

use Bankas\Controllers\JsonController as Json;
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

        $user = (new Json)->showall();
        return App::view('list', ['title' => 'List', 'account' => $user]);
    }
    public function formJson()
    {
        $rawData = file_get_contents("php://input"); // duomenu nuskaitymas
        $data = json_decode($rawData, 1);
        return App::view('list', ['msg' => 'ok, Alabama', 'youSay' => $data['alabama']]); //objektas pavadinimu alabama in form
    }

    public function newAccount()
    {
        $account = [
            'surname' => ($_POST['surname'] ?? 0),
            'name' => ($_POST['name'] ?? 0),
            'personalId' => ($_POST['personalId'] ?? 0),
            'accountNumber' => ($_POST['accountNumber'] ?? 0),
            'amount' => ($_POST['amount'] ?? 0)
        ];
        (new Json)->create($account);
        return App::redirect('list');
    }
    public function deleteAccount(string $id)
    {
        $data = (new Json);
        $data->delete($id);
        return App::redirect('list');
    }
    public function toAdd(string $id)
    {
        $user = (new Json)->show($id);
        return App::view('addCash', ['title' => 'User', 'account' => $user]);
    }
    public function add(string $id)
    {
        $clientData = (new Json)->show($id);
        $clientData['amount'] += $_POST['amount'];
        (new Json)->update($id, $clientData);
        return App::redirect('list');
    }
}
