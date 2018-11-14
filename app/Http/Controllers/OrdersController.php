<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        dd($order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        if(isset($request->soup)){
            $soup = explode("|", $request->soup);
            $soup_name  = $soup[0];
            $soup_price = $soup[1];
        } else {
            $soup_name = null;
            $soup_price = 0;
        }

        if(isset($request->main)){
            $main = explode("|", $request->main);
            $main_name  = $main[0];
            $main_price = $main[1];
        } else {
            $main_name = null;
            $main_price = 0;
        }

        if(isset($request->soup)){
            $salad = explode("|", $request->salad);
            $salad_name  = $salad[0];
            $salad_price = $salad[1];
        } else {
            $salad_name = null;
            $salad_price = 0;
        }

        $price = $soup_price + $main_price + $salad_price;

        Order::create($request->only('side') + ['user_id' => $user_id, 'soup' => $soup_name, 'main' => $main_name, 'salad' => $salad_name, 'price' => $price]);
        return redirect()->route('dishes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
