@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('services.update', $service->id) }}">
            @csrf
            @method('PUT')

            <div class="card shadow-lg mt-5">
                <div class="card-header">Edite Service</div>
                <div class="card-body">
                    <div>
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="service_name" placeholder="Service Name"
                            value="{{ $service->service_name }}">
                    </div> <br>


                    <div>
                        <label for="">Price:</label>
                        <input type="number" class="form-control" name="price" placeholder="Price"
                            value="{{ $service->price }}">
                    </div> <br>

                    <div>
                        <input type="submit" class="btn btn-warning" value="Update">
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
