<!-- <?php

// namespace Bankas\Controllers;

// use Bankas\App;

// class CreateDataJson
// {
//     public function newAccount()
//     {
//         $accountNr = '';
//         $client = '';
//         $amount = 0;
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             if (!file_exists(__DIR__ . "/data/duomenys.json")) {
//                 file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([]));
//             }
//             $allAccounts = json_decode(file_get_contents(__DIR__ . "/data/duomenys.json"), TRUE);
//             file_put_contents(__DIR__ . "/data/duomenys.json", json_encode([
//                 ...$allAccounts, [...$_POST, "ID" => $client, "accountid" => $accountNr, "amount" => $amount]
//             ]));
//             return App::view('form', [...$_POST, "ID" => $client, "accountid" => $accountNr, "amount" => $amount]);
//         }
//     }
// } -->
