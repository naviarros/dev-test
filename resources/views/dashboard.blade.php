@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Customer Dashboard</h1>

    <table class="table-auto border-collapse border border-gray-300 w-full">
        <thead>
            <tr>
                <th class="border px-2 py-1">ID</th>
                <th class="border px-2 py-1">First Name</th>
                <th class="border px-2 py-1">Last Name</th>
                <th class="border px-2 py-1">Email</th>
                <th class="border px-2 py-1">City</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td class="border px-2 py-1">{{ $customer->id }}</td>
                <td class="border px-2 py-1">{{ $customer->first_name }}</td>
                <td class="border px-2 py-1">{{ $customer->last_name }}</td>
                <td class="border px-2 py-1">{{ $customer->email }}</td>
                <td class="border px-2 py-1">{{ $customer->city }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{-- Laravel pagination links --}}
        {{ $customers->links() }}
    </div>
</div>
@endsection
