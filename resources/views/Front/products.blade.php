@extends('Front.layout.master')

@section('title','Products')

@section('navbar')
    @include('Front.includes.navbar')
@stop

@section('content')
<div class="container-fluid">
    <div class="row">


        <div style="color:#FFF" class="modal-header heading text-center center-block" id="head">
           <p>البيكيا و الأسعار</p>
        </div>
            @foreach ($allproduct as $info)
            <div class="col-sm-4 col-md-3 col-xs-12 col-lg-3 showproduct">
               <div class="row">
                    <div class="col-md-12">
                        <img id="" class="img-thumbnail img1" src="{{asset('images').'/'.$info->photo}}" style="height: 180px;width:180px">
                    </div>
                    <div class="col-md-12">
                        {{-- <div class="description"> --}}
                            <span class="proName">{{$info->name}}</span>
                            <span class="proprice">{{$info->price}}</span>
                            <span class="prodic">{{$info->discription}}</span>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@stop


