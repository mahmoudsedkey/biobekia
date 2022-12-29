@extends('admin.layouts.master')
@section('title','Edit Product')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="col-md-12 col-xs-12">
    <form class="center-block" action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2 class="text-center"><span> تعديل منتج</span></h2>
        <input class="form-control" type="text" name="name" placeholder="أسم المنتج " required value="{{$product->name}}">
        <input class="form-control" type="text" name="price" placeholder="السعر " required value="{{$product->price}}">

        <input class="form-control" type="text" name="discription" placeholder="الوصف " required value="{{$product->discription}}">

       <!-- <div class="wrap">-->
        <div class="form-group">
            <label>أضافة صورة<i fa="" fa-photo=""></i></label>
            <input class="form-control" type="file" name="image" id="">
        </div>
        <!--</div>-->


        <input class="btn btn-block" type="submit" value="أضافة" id="d">

    </form>
</div>
@stop
