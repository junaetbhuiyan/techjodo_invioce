@extends('layout')
@section('content')
    <style>
        .sameline {
            display: inline-block;
        }
    </style>

    <div class="container">

        <table class="table table-bordered table-secondary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>customer_number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->customer_number }}</td>
                    <td>
                        <span class="sameline">
                            <a href="{{ route('customers.edit', $customer->id) }}"><i
                                    class="fa-regular fa-pen-to-square text-dark"></i></a>

                        </span>
                        <span class="sameline">
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border-0"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
