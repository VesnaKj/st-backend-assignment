<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoices::all();
        return response()->json($invoices);
    }
    public function invoicemanager(Request $request)
    {
        $invoice = new Invoice;
        $invoice->id = $request->id;
        $invoice->invoicenumber = $request->invoicenumber;
        $invoice->save();
        return response()->json([
            "message" => "Invoice added."
        ]);
    }
    public function show($id)
    {
        $invoice = Invoices::find($id);
        if(!empty($invoice))
        {
            return response()->json($invoice);

        }
        else
        {
            return response()->json([
                "message" => "Invoice not found"
            ]);
        }
    }
    public function update (Request $request, $id)
    {
        if(Invoices::where('id',$id)->exists()){
            
        }
    }
}
