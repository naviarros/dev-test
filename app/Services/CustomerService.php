<?php

namespace App\Services;

use App\Repository\CustomersRepo;
use App\Http\Requests\CustomerRequest;
use App\Models\CustomersModel;

class CustomerService
{
    protected CustomersRepo $repo;

    public function __construct(CustomersRepo $repo)
    {
        $this->repo = $repo;
    }

    public function create(CustomerRequest $request): CustomersModel
    {
        return $this->repo->create($request->validated());
    }

    public function update(CustomerRequest $request, CustomersModel $customer): CustomersModel
    {
        return $this->repo->update($customer, $request->validated());
    }

    public function delete(CustomersModel $customer): bool
    {
        return $this->repo->delete($customer);
    }

    public function find(int $id): ?CustomersModel
    {
        return $this->repo->find($id);
    }

    /**
     * Paginated list with filters and sorting
     */
    public function all(int $perPage = 15)
    {
        return $this->repo->all($perPage);
    }

}
