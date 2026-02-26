<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use App\Http\Requests\CustomerRequest;
use App\Models\CustomersModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected CustomerService $service;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function store(CustomerRequest $request)
    {
        $customer = $this->service->create($request);
        return response()->json(['success' => true, 'data' => $customer]);
    }

    public function update(CustomerRequest $request, CustomersModel $customer)
    {
        $customer = $this->service->update($request, $customer);
        return response()->json(['success' => true, 'data' => $customer]);
    }

    public function destroy(CustomersModel $customer)
    {
        $this->service->delete($customer);
        return response()->json(['success' => true]);
    }

    public function show(CustomersModel $customer)
    {
        return response()->json(['success' => true, 'data' => $customer]);
    }


    // public function index(Request $request)
    // {
    //     $perPage = (int) $request->query('per_page', 15);
    //     $customers = $this->service->all($perPage);

    //     return response()->json([
    //         'success' => true,
    //         'data' => $customers->items(),
    //         'meta' => [
    //             'current_page' => $customers->currentPage(),
    //             'last_page' => $customers->lastPage(),
    //             'per_page' => $customers->perPage(),
    //             'total' => $customers->total(),
    //         ]
    //     ]);
    // }

    public function index()
    {
        $perPage = 15;
        $customers = $this->service->all($perPage);

        return view('dashboard', compact('customers'));
    }
}
