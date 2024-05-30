<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Service;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        return view('invoices.create',compact('services'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validation rules
        $request->validate([
            'service_id' => 'required',
            'total' => 'required',
            'discount',
            'advance',
            'due',
            'date' => 'required'
        ]);
        $invoice =Invoice::create($request->all());
        // $invoice->customer_id = $request->customer_id;
        // $invoice->total = $request->total;
        // $invoice->due = $request->due;
        // $invoice->advance = $request->advance;
        // $invoice->discount = $request->discount;
        // $invoice->date = $request->date;
        // dd($invoice);
        $invoice->save();

        // Redirect or respond as needed after successful storage
        return redirect()->route('invoices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.edite', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        $invoice->service_id = $request->service_id;
        $invoice->total = $request->total;
        $invoice->discount = $request->discount;
        $invoice->advance = $request->advance;
        $invoice->due = $request->due;
        $invoice->date = $request->date;
        $invoice->save();
        return redirect()->route('invoices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return back();
    }
}
