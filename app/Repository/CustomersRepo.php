<?php

namespace App\Repository;

use App\Models\CustomersModel;
use App\Interface\CustomerInterface;

class CustomersRepo implements CustomerInterface
{
    public function create(array $data)
    {
        return CustomersModel::create($data);
    }

    public function update(CustomersModel $customer, array $data)
    {
        $customer->update($data);
        return $customer;
    }

    public function delete(int $id): bool
    {
        $customer = CustomersModel::find($id);
        if ($customer) {
            $customer->delete();
            return true;
        }
        return false;
    }

    public function find(int $id): ?CustomersModel
    {
        return CustomersModel::find($id);
    }

    /**
     * Paginated list with optional filters and sorting
     */
    public function all(int $perPage = 15)
    {
        return CustomersModel::paginate($perPage);   // returns paginated results
    }
}
