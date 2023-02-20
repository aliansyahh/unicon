<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_awal" => "required",
            "nama_belakang" => "required",
            "tmpt_lahir" => "required",
            "tgl_lahir" => "required",
            "email" => "required",
            "nomor_hp" => "required",
            "alamat" => "required",
            "qty" => "required",
        ]);


        $result = Order::create([

            "nama_awal" => $request->nama_awal,
            "nama_belakang" => $request->nama_belakang,
            "tmpt_lahir" => $request->tmpt_lahir,
            "tgl_lahir" => $request->tgl_lahir,
            "email" => $request->email,
            "nomor_hp" => $request->nomor_hp,
            "alamat" => $request->alamat,
            "status" => "Unpaid",
            "transaction_id" => NULL,
            "order_id" => NULL,
            "qty" => $request->qty,
            "gross_amount" => $request->qty * 30000,
            "payment_type" => NULL,
            "payment_code" => NULL,
            "pdf_url" => NULL,
        ]);
        // return dd($result->id);
        return redirect()->to("detail-order/$result->id")->with('status', 'Data Berhasil Dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config("midtrans.server_key");
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' =>  rand(),
                'gross_amount' => $order->gross_amount,
            ),
            'item_details' => array(
                [
                    'id' => 'D1',
                    'price' => 30000,
                    'quantity' => $order->qty,
                    'name' => 'Tiket Reguler'
                ]
            ),
            'customer_details' => array(
                'first_name' => $order->nama_awal,
                'last_name' => $order->nama_belakang,
                'email' => $order->email,
                'phone' => $order->nomor_hp,
            ),
        );

        $serverKey = config("midtrans.server_key");
        $a = hash("sha512", $order->order_id . $order->status_code . $order->gross_amount . $serverKey);
        $token = \Midtrans\Snap::getSnapToken($params);
        return view("assets.detail_order.form_tiket", compact("order", 'token', 'a'));
    }


    public function callback(Request $request)
    {
        $serverKey = config("midtrans.server_key");
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == "settlement") {
                $order = Order::find($request->order_id);
                $order->update(['status' => "paid"]);
            }
        }
    }


    public function payment(Request $request, $id)
    {
        $json = json_decode($request->get('json'));
        $update = Order::find($id);;
        $update->status = $json->transaction_status ? $json->transaction_status : NULL;
        $update->transaction_id = $json->transaction_id ? $json->transaction_id : NULL;
        $update->order_id = $json->order_id ? $json->order_id : NULL;
        $update->payment_type = $json->payment_type ? $json->payment_type : NULL;
        $update->payment_code = isset($json->va_number[0]->va_number) ? $json->payment_code : NULL;
        $update->pdf_url = isset($json->pdf_url) ? $json->pdf_url : NULL;
        $update->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}