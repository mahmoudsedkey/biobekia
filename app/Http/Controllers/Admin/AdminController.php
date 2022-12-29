<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
 
class AdminController extends Controller{


    public function dashboard(){

            $countuser=User::count();
            $countproduct=Product::count();
            $allproducts=Product::all();
            $countorder=Order::count();
            $neworders=Order::where('state','=','0')->limit(5)->get();
            $completorder=count(Order::where('state','=','1')->get());
            $uncompletorder=count(Order::where('state','=','0')->get());


            $alldata=[

                'countuser'=>$countuser,
                'countproduct'=>$countproduct,
                'countorder'=>$countorder,
                'completorder'=>$completorder,
                'uncompletorder'=>$uncompletorder,
                'neworders'     =>$neworders,
                'allproducts'    =>$allproducts


            ];

            return view('admin.dashbourd',$alldata);


    }
}
