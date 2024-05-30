@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('customers.update', $customer->id) }}">
            @csrf
            @method('PUT')

            <div class="card shadow-lg mt-5">
                <div class="card-header">Edit Customer </div>
                <div class="card-body">
                    <div>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="customer_name" placeholder="Customer name"
                            value="{{ $customer->customer_name }}">
                    </div> <br>

                    <div>
                        <label for="">Number:</label>
                        <input type="number" class="form-control" name="customer_number" placeholder="Phone Number"
                            value="{{ $customer->customer_number }}">
                    </div> <br>

                    <div>
                        <input type="submit" class="btn btn-warning" value="Update">
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
