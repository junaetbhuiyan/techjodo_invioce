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
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->service_name }}</td>
                    <td>{{ $service->price }}</td>
                    <td>
                        <span class="sameline">
                            <a href="{{ route('services.edit', $service->id) }}"><i
                                    class="fa-regular fa-pen-to-square text-dark"></i></a>

                        </span>
                        <span class="sameline">
                            <form action="{{ route('services.destroy', $service) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <input class="btn btn-danger" type="submit" value="Delete"> --}}
                                <button class="border-0"><i class="fa-solid fa-trash-can"></i></button>

                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
