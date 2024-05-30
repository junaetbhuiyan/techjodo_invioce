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
                    <th>Service Name</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Advance</th>
                    <th>Due</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->services ? $invoice->services->service_name : '' }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->discount }}</td>
                    <td>{{ $invoice->advance }}</td>
                    <td>{{ $invoice->due }}</td>
                    <td>{{ $invoice->date }}</td>

                    <td>
                        <span class="sameline">
                            <a href="{{ route('invoices.edit', $invoice->id) }}"><i
                                    class="fa-regular fa-pen-to-square text-dark"></i></a>

                        </span>
                        <span class="sameline">
                            <form action="{{ route('invoices.destroy', $invoice) }}" method="POST">
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
