@extends('layout')
@section('content')
    <div class="container">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            @method('POST')


            <div class="card shadow-lg mt-5">
                <div class="card-header">Create New Customer</div>
                <div class="card-body">
                    <div>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="customer_name" placeholder="Customer name">
                    </div> <br>

                    <div>
                        <label for="">Number:</label>
                        <input type="number" class="form-control" name="customer_number" placeholder="Phone Number">
                    </div> <br>

                    <div>
                        <input type="submit" class="btn btn-success" value="Create">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
