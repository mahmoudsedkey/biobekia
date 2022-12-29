@extends('admin.layouts.master')
@section('title','Edit Partner')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="col-md-12 col-xs-12">
    <form class="center-block" enctype="multipart/form-data" action="{{route('partners.update',$partner->id)}}" method="POST" dir="auto" enctype="multipart/form-data">

        <h2 class="text-center"><span>تعديل </span></h2>
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="الاسم " required="" value="{{$partner->name}}">
        </div>
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
