@extends('admin.layouts.master')
@section('title','Add New User')
@section('navbar')
@include('admin.includes.navbar')
@stop

@section('content')
<div class="container">





    <div class="row">
        <div class="clearfix">
        <div class="col-md-6 col-md-push-3 col-xs-12">
            @if(Session::has('message'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div class="h1 text-center">
                  {{Session::get('message')}}
                </div>
              </div>
            @endif

            <form class="center-block" action="{{route('users.store')}}" method="post" >
                @csrf
                <h2 class="text-center"><span>أضافة  </span>عضو </h2>
                <input class="form-control" type="text" name="username" placeholder="أسم المستخـــدم " required id="user" autocomplete="off">
                <input class="form-control" type="password" id="pass" name="password1" placeholder=" كلمة الســــر " autocomplete="new-password" required>
                <input class="form-control" type="password" id="pass" name="password2" placeholder="تأكيد كلمة الســــر" autocomplete="new-password" required>
                <input class="form-control" type="text" id="pass" name="name" placeholder=" أسم المستخدم بالكامل" required autocomplete="off">

                <input class="form-control" type="email" id="" name="email" placeholder=" البريد الالكتروني " required autocomplete="off">

                <input class="btn btn-block" type="submit" value="أضافة" id="d">

            </form>
        </div>

    </div>
</div>
@stop
