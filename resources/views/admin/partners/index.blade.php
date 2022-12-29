@extends('admin.layouts.master')
    @section('title','Partners')
@section('navbar')
    @include('admin.includes.navbar')
@stop

@section('content')

<div class="container">
     <div class="row">
      <div class="col-md-12  ">
        <h2 class="text-center">شركاء النجاح</h2>
        <table class="table table-responsive table-bordered text-center" dir="auto">
            <tbody>
             <tr class="navbar-inverse" style="color: white">
                <td>الرقم التعريفي</td>
                <td>أسم الشركة</td>
                <td>الشعار</td>

                <td>التاريخ</td>
                <td>اعدادات</td>
            </tr>
            @foreach ($partners as $partner)
            <tr>
                <td>{{$partner->id}}</td>
                <td>{{$partner->name}}</td>
                <td><img class="center-block" width="50px" height="30px" src="{{asset('images').'/'.$partner->photo}}"></td>
                <td>{{$partner->created_at}}</td>
                <td>
                    <form class="miniform" action="{{route('partners.destroy',$partner->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            <i class="fa fa-close"></i> حذف
                        </button>
                    </form>
                     <a href="{{route('partners.edit',$partner->id)}}" class="btn btn-success">
                     <i class="fa fa-edit"></i> تعديل  </a>
                </td>
             </tr>

            @endforeach

            </tbody>

        </table>
        <div class="text-center">
            <a href="{{route('partners.create')}}" class="btn btn-success">
                أضافة <i class="fa fa-plus fa-1x"></i>
            </a>
        </div>
     </div>
</div>

@stop
