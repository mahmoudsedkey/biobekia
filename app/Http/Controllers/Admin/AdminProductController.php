<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
      //  dd($products);
        return view('admin.products.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator=Validator::make($request->all(),$rules,$messages);
                 if($validator->fails())
                   return redirect()->back()->withErrors($validator->errors());
        //save data to database ['pro_id','name','discription','photo','price','created_at']
        $file_path=uploadImage('products',$request->image);
         Product::create([
                            'name'       =>$request->name,
                            'discription'=>$request->discription,
                            'photo'      =>$file_path,
                            'price'      =>$request->price,


          ]);
          return redirect('admin/products');
    }
    public function getRules(){
        return [
            'name'=>'min:1|max:20',
            'discription'=>'min:1|max:10',
            'price'=>'min:2|max:20'

        ];
    }
    public function getMessages(){
        return [
            'name.min'=>'name less than 2 char',
            'name.max'=>'name more than 20 char',
            'discription.min'=>'discription less than 2 char',
            'discription.max'=>'discription more than 20 char'
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
        $product=Product::find($id);//$product=Product::where('id',$id)->first()
        //dd($product);

        return view('admin.products.editproduct',['product'=>$product]);
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
        $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator=Validator::make($request->all(),$rules,$messages);
         if($validator->fails())
                return redirect()->back()->withErrors($validator->errors());
        $product=Product::find($id);

            $file_path=uploadImage('products',$request->image);
            $result=$product->update([
                'title'=>$request->title,
                'decription'=>$request->decription,
                'price'=>$request->price,
                'image'=>$file_path,
                'available'=>$request->available,
                'user_id'=>$request->user_id
            ]);
        return redirect('admin/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::where('id',$id)->first();
        if(!$product)
            abort('404');
            //dd($product);
        $product->delete();
        return redirect('admin/products');
    }
}
