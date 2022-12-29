@extends('admin.layouts.master')
@section('title','Edit User')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <form class="center-block" action="{{route('users.update',$user->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <h2 class="text-center"><span>تعديل </span>المعلومات</h2>
                <input type="hidden" value="1" name="userid">

                <input class="form-control" type="text" name="username" placeholder="أسم المستخـــدم الجديد" required id="user" value="{{$user->userName}}" >
                <input class="form-control" type="password" id="pass" name="password1" placeholder=" كلمة الســــر الجديده" value="">
                <input class="form-control" type="password" id="pass" name="password2" placeholder="تأكيد كلمة الســــر" >
                <input class="form-control" type="text" id="pass" name="name" placeholder=" أسم المستخدم الجديد" required value="{{$user->fullName}}">

                <input class="form-control" type="email" id="pass" name="email" placeholder=" البريد الالكتروني الجديد" required value="{{$user->email}}" >
                

                <div id="error"></div>
                <input class="btn btn-block" type="submit" value="حفظ الان" id="d">

            </form>
        </div>

    </div>
</div>
@stop
