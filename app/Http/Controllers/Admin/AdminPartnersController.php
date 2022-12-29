<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\partnerRequest;
use Illuminate\Http\Request;
use App\Models\Partner;

class AdminPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=Partner::all();
       // dd($partners);
        return view('admin.partners.index',['partners'=>$partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new partners
        return view('admin.partners.createpartner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(partnerRequest $request)
    {

        $file_path=uploadImage('products',$request->image);
        Partner::create([
            'photo'=>$file_path,
            'name'=>$request->name,
        ]);
        return redirect('admin/partners');
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
        $partner=Partner::find($id);
        return view('admin.partners.editpartner',['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(partnerRequest $request, $id)
    {
        $partner=Partner::find($id);

        $file_path=uploadImage('partners',$request->image);
        $partner->update([
            'photo'=>$file_path,
            'name'=>$request->name,
        ]);
        return redirect('admin/partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete partner from tabel partners
        $partner=Partner::find($id);//shoud have colwn id in table to use find
//       return dd($partner);
        if(!$partner)
           abort('404');
        $partner->delete();
        return redirect()->back();
    }
}
