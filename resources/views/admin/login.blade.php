@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <form class="center-block" action="{{route('admin.loginuser')}}" method="POST" >
                @csrf
                <h2 class="text-center"><span>تسجيل </span>دخول</h2>
                <input class="form-control" type="text" name="username" value="mahmoud@gmail.com" dir="auto" placeholder="أسم المستخـــدم" id="user" autocomplete="off">
                <input class="form-control" type="password" id="pass" value="12345678" name="password" placeholder="كلمة الســــر" autocomplete="new-password" aria-autocomplete="list">
                <div id="error"></div>
                <input class="btn btn-block" type="submit" value="تسجـيل الدخول" id="d">

            </form>
        </div>

    </div>
</div>

@endsection
