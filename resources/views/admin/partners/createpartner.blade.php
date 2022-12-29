@extends('admin.layouts.master')
@section('title','New Partner')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="col-md-12 col-xs-12">
    <form class="center-block"  action="{{route('partners.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center"><span>أضافة </span></h2>
        <input class="form-control" type="text" name="name" placeholder="الاسم " required="">

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
