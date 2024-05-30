@extends('layout')
@section('content')
    <div class="container">
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="card shadow-lg mt-5">
                <div class="card-header">Create New Services</div>
                <div class="card-body">
                    <div>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="service_name" placeholder="Service Name">
                    </div> <br>

                    <div>
                        <label for="">Price:</label>
                        <input type="number" class="form-control" name="price" placeholder="Price">
                    </div> <br>

                    <div>
                        <input type="submit" class="btn btn-success" value="Create">
                    </div>
                </div>
            </div>




        </form>
    </div>
@endsection
