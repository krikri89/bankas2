<?php

namespace Bankas\Controllers;

use App\DB\DataBase;

class JsonController implements DataBase
{
    private $data;
    public function __construct()
    {
        if (!file_exists(__DIR__ . '/../../data/list.json')) {
            file_put_contents(__DIR__ . '/../../data/list.json', json_encode([]));
            file_put_contents(__DIR__ . '/../../data/user_id.json', 0);
        }
        $this->data = json_decode(file_get_contents(__DIR__ . '/../../data/list.json'), 1);
    }
    public function __destruct()
    {
        file_put_contents(__DIR__ . '/../../data/list.json', json_encode($this->data));
    }
    private function getId()
    {
        $id = (int) file_get_contents(__DIR__ . '/../../data/user_id.json');
        $id++;
        file_put_contents(__DIR__ . '/../../data/user_id.json', $id);
        return $id;
    }
    public function create(array $postData): void
    {
        $postData['id'] = $this->getId();
        $this->data[] = $postData;
    }
    public function showAll(): array
    {
        return $this->data;
    }
    public function show(int $id): array
    {
        foreach ($this->data as $data) {
            if ($data['id'] == $id) {
                return $data;
            }
        }
    }
    public function delete(int $id): void
    {
        foreach ($this->data as $key => $data) {
            if ($data['id'] == $id) {
                unset($this->data[$key]);
                break;
            }
        }
    }
    public function update(int $id, array $data): void
    {
        foreach ($this->data as $key => $value) {
            if ($value['id'] == $id) {
                $this->data[$key] = $data;
                break;
            }
        }
    }
}
