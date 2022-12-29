<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all prodects

      $allProducts=Product::orderby('id','desc')->get();
      //$allProducts= Product::find(1);
      return  view('products.product')->with('allProducts',$allProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new product
        return view('products.createproduct');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $rules   =$this->getRules();
        $message =$this->getmessages();

        $validator=Validator::make($request->all(),$rules,$message);
       if(!$validator->failed())
           return redirect()->back()->withErrors($validator)->withInputs($request->all());

      else
      {
        $file_path=uploadImage('products',$request->image);
        Product::create([
            'title'=>$request->title,
            'decription'=>$request->decription,
            'price'=>$request->price,
            'image'=>$file_path,
            'available'=>$request->available,
            'user_id'=>$request->user_id
        ]);
      }

         return redirect()->back()->with(['message','complete']);
        //return redirect('products');

  //return "you are in store page";
    }
protected function getRules(){
    return $rules=[
        'title'=>'required|min:2|max:20',
        'decription'=>'required|min:10|max:100',
        'price'=>'required|min:0|max:100',
        'image'=>'required|min:0|max:20',
        'available'=>'required',
        'user_id'=>'required'
    ];
}

protected function getmessages(){
return  $message=[
    'title.required'=>'you should write title',
    'decription.required'=>'you should write description',
    'price.required'=>'you shoud write price'
];
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $product=Product::find($id);
         if(!$product)
            return redirect()->back()->with(['message','product not found']);
        $rules   =$this->getRules();
        $message =$this->getmessages();

        $validator=Validator::make($request->all(),$rules,$message);
       if(!$validator->failed())
           return redirect()->back()->withErrors($validator)->withInputs($request->all());

      else
      {
        $file_path=uploadImage('products',$request->image);
        $product::update([
            'title'=>$request->title,
            'decription'=>$request->decription,
            'price'=>$request->price,
            'image'=>$file_path,
            'available'=>$request->available,
            'user_id'=>$request->user_id
        ]);
      }

         return redirect()->back()->with(['message','update complete']);

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
