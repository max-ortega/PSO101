<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Import the Order model
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::orderby('id','DESC')->get();
        $data['orders'] = $orders;
        return view('order', $data);
    }

    public function downloadPdf(){
        $orders = Order::orderby('id','DESC')->get();
        $data['orders'] = $orders;
        $pdf = Pdf::loadView('pdf.order', $data)->setPaper('legal', 'portait');
        return $pdf->download('pdf.pdf');
        //return $pdf->stream();
    }
}
