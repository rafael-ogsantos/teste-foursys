<?php

namespace Src\Drivers;

use App\Models\Model;

interface MysqlStrategy
{
    public function save(Model $data);
    public function insert(array $data = []);
    public function update(Model $data);
    public function delete(array $conditions = []);
    public function select(array $conditions = []);
    public function all();
    public function exec(string $query = null);
    public function first();
}