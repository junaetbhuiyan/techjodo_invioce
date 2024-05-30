@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
            @csrf
            @method('PUT')

            <div class="card shadow-lg my-5">
                <div class="card-header">Edite Invoice</div>
                <div class="card-body">
                    <div>
                        <label for="">Customer Id:</label>
                        <input type="text" class="form-control" name="customer_id" placeholder="Customer Id"
                            value="{{ $invoice->customer_id }}">
                    </div> <br>

                    <div>
                        <label for="">Total:</label>
                        <input type="text" class="form-control" name="total" placeholder="Total"
                            value="{{ $invoice->total }}">
                    </div> <br>
                    <div>
                        <label for="">Due:</label>
                        <input type="text" class="form-control" name="due" placeholder="Due"
                            value="{{ $invoice->due }}">
                    </div> <br>
                    <div>
                        <label for="">Advance:</label>
                        <input type="text" class="form-control" name="advance" placeholder="Advance"
                            value="{{ $invoice->advance }}">
                    </div> <br>
                    <div>
                        <label for="">Discount:</label>
                        <input type="text" class="form-control" name="discount" placeholder="Discount"
                            value="{{ $invoice->discount }}">
                    </div> <br>
                    <div>
                        <label for="">Date:</label>
                        <input type="text" class="form-control" name="date" placeholder="Date"
                            value="{{ $invoice->date }}">
                    </div> <br>

                    <div>
                        <input type="submit" class="btn btn-warning" value="Update">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
