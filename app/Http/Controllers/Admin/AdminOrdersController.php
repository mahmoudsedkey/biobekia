<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Error;

class AdminOrdersController extends Controller
{
    public function index(){

        if(isset($_GET['state']) && $_GET['state']==1)
           $allorders=Order::where('state',1)->get();
        else
            $allorders=Order::where('state',0)->get();
        return view('admin.orders.orders',['orders'=>$allorders]);

    }

    public function update($id){
        $order=Order::find($id);
        if(!$order)
           return redirect()->route('orders.index')->withError('الطلب غير موجود');

        $order->update([
            'state'=> 1
        ]);

         return redirect()-> route('orders.index')->withMessage('تم التحيث بنجاح');
    }
    public function destroy($id){
        $order=Order::find($id);
        //dd($order);
        if(!$order)
            abort('404');
        $order->delete();
        return redirect('admin/orders');
    }

    public function show($id){

        $order=Order::find($id);

        return view('admin.orders.showorder',['order' => $order]);
        }
}
