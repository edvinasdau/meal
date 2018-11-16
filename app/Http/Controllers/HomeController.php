<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        if ($user->role == 'admin'){
            $orders = Order::all();
        } else {
            $orders = Order::all()->where('user_id', $user->id);
        }
        
        return view('home', compact('orders', 'user'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {
        $arr = $request->only('main', 'soup', 'salad', 'side');
       
        Order::findOrFail($id)->update($arr);
        return redirect()->back();
    }

        public function destroy($id)
    {
        Order::destroy($id);
        session() -> flash( 'success', 'Order deleted successfully' );
        return redirect()->back();
    }
}
