<?php

namespace App\Interface;

use App\Models\CustomersModel;

interface CustomerInterface
{
    public function all(int $perPage = 15);
    public function find(int $id);
    public function create(array $data);
    public function update(CustomersModel $customer, array $data); // pass model
    public function delete(int $id);
}
