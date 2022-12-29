@extends('admin.layouts.master')
@section('title','Admins')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')

        <h2 class="text-center">أدارة المستخدمين</h2>
        <div class="container">
            <div class="table-responsive ">
                <table class="table text-center table table-bordered" dir="auto">
                    <tbody><tr class="navbar-inverse" style="color: white">
                        <td>الرقم التعريفي</td>
                        <td>أسم المستخدم</td>
                        <td>الأسم بالكامل</td>
                        <td>البريد الالكتروني</td>
                        <td>تاريخ الانضمام</td>
                        <td>أعدادات</td>
                    </tr>
                    @foreach($allusers as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->userName}}</td>
                        <td>{{$user->fullName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <form class="miniform" action="{{route('users.destroy',$user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger confirm" type="submit"><i class="fa fa-close"></i> حذف</button>
                            </form>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-success">تعديل
                            <i class="fa fa-edit"></i></a>

                       </td>
                       </tr>
                    @endforeach
                   </tbody>
                </table>
            </div>

        </div>
        <div class="text-center">
            <a href="{{route('users.create')}}" class="btn btn-success">
                مستخدم جديد <i class="fa fa-plus fa-1x"></i>
            </a>
        </div>
@stop
