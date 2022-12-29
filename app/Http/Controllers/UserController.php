<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Partner;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

     $count=Order ::count();
     return view('Front.index',['orderCount'=>$count]);
    }

    public function about(){
        return view('Front.about');
    }

    public function partner(){

        $allPartners=Partner::select('photo')->get();

        //  dd($allPartners);
        return view('Front.partners')->with('partnerlogo',$allPartners);
    }

    public function products(){

       $allproducts=Product::select('name','discription','price','photo')->get();
       //return $allproducts;
        return view('Front.products')->with('allproduct',$allproducts);
    }
    public function ordernow(){

        $allCountry=Country::select('c_name')->get();

        return view('Front.ordernow')->with('country',$allCountry);
    }

    public function saveorder(Request $request){
       //validate date before save
       //return $request->all();
       $rules=$this->getRules();
       $messages=$this->getMessages();



       $validAtor=Validator ::make($request->all(),$rules,$messages);


       if($validAtor->fails()){
        //return $validAtor->errors();
        return redirect()->back()->withErrors($validAtor->errors()->all())->withInputs($request->all());
    }


      else
        {
            $file_path=uploadImage('orders',$request->image);
            Order:: create([
                'userName' =>$request->name,
                'address'  =>$request->address,
                'photo'    =>$file_path,
                'phone'    =>$request->phone,
                'state' =>'0',
                'date'=>'2022-05-29'

              ]);
        }


      return redirect()->back()->with('message','COMPLET ORDER');



    }


    protected function getRules(){
        return $Rueles= [//validation rules
            'name'=>'required|min:2|max:50',
            'address'=>'required|min:2|max:100',
        ];
        //to validate if foun in database or not you will use unique:orders,userName
    }

    protected function getMessages(){
        return $messages=[
            //message
            'name.min'=>'Name Is false',
            'name.max'=>'الأسم يجب انت لا يتعدي 50 حرف',
             'address.min'=>'العنوان ليس مكتمل',


        ];
    }
}
