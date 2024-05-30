@extends('layout')
@section('content')
    <div class="container mt-4">
        <form action="{{ route('invoices.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="row ">
                <div class="col col-5 ">
                    <div class="card shadow-lg">
                        <div class="card-header">Customer details</div>
                        <div class="card-body">
                            <div class="row pt-4">
                                <span class="col-6">
                                    <label for="">Customer name:</label>
                                    <input type="text" class="form-control py-2">
                                </span>
                                <span class="col-6">
                                    <label for="">Customer number:</label>
                                    <input type="text" class="form-control py-2">
                                </span>
                            </div>
                            <div class="pt-3">
                                <label for="">Customer Adress:</label><br>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>

                            <div class="pt-3">
                                <label for="">Note:</label><br>
                                <textarea class="form-control" name="" id=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-7">
                    <div class="card shadow-lg">
                        <div class="card-header">Service details</div>
                        <div class="card-body">
                            <table class="table table-bordered" id="service_table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <select class="form-control" name="service_id" id="service_id">

                                                <option value="">Select a service</option>

                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}" data-price="{{ $service->price }}"
                                                        data-title="{{ $service->service_name }}">
                                                        {{ $service->service_name }}
                                                        {{-- {{ $service->price }} --}}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>



                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <label class="form-label w-50" for="">Total:</label>
                                <input type="number" class="form-control" name="total" placeholder="0">
                            </div> <br>

                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <label class="form-label w-50" for="">Discount:</label>
                                <input type="number" class="form-control" name="discount" placeholder="0">
                            </div> <br>

                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <label class="form-label w-50" for="">Advance:</label>
                                <input type="number" class="form-control" name="advance" placeholder="0">
                            </div> <br>

                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <label class="form-label w-50" for="">Due:</label>
                                <input type="number" class="form-control" name="due" placeholder="0">
                            </div> <br>

                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <label class="form-label w-50" for="">Date:</label>
                                <input type="date" class="form-control" name="date" placeholder="Date">
                            </div> <br>

                            <div>
                                <input type="submit" class="btn btn-success w-100" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        // Use jQuery.noConflict() if necessary
        $(document).ready(function($) {

            // Select2 initialization
            $('#service_id').select2({
                placeholder: "Select a service....",
                allowClear: true
            }).on('select2:select', function(e) {
                var selectedData = $(this).select2('data');
                var title = $(this).find('option:selected').attr('data-title');
                var price = $(this).find('option:selected').attr('data-price');
                var id = e.params.data.id;
                var html = '<tr data-id="' + id + '"> <td>' + title + '</td> <td>' + price + '</td></tr>';
                $('#service_table tbody').append(html);

                // Update total
                updateTotal();
            });


            // Function to update total
            function updateTotal() {
                var total = 0;
                $('#service_table tbody tr').each(function() {
                    total += parseFloat($(this).find('td:eq(1)').text());
                });
                // Update total input field
                $('input[name="total"]').val(total.toFixed(2));
            }

            function updateDue() {
                var total = 0;
                $('#service_table tbody tr').each(function() {
                    total += parseFloat($(this).find('td:eq(1)').text());
                });

                // Subtract discount from total
                var discount = parseFloat($('input[name="discount"]').val()) || 0;
                total -= discount;

                // Subtract advance from total
                var advance = parseFloat($('input[name="advance"]').val()) || 0;
                total -= advance;

                // Update total input field
                $('input[name="due"]').val(total.toFixed(2));
            }


            // Event listener for discount input field
            $('input[name="discount"]').on('input', function() {
                // Update due
                updateDue();
            });

            // Event listener for advanc input field
            $('input[name="advance"]').on('input', function() {
                // Update advance
                updateDue();
            });
        });
    </script>
@endsection
