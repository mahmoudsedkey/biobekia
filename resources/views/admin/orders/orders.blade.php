@extends('admin.layouts.master')
@section('title','Orders')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="container">
    <div class="">
        <h1>{{session('error')}}</h1>
    </div>
    <div class="table-responsive">
    <input type="hidden" id="id" value="0">
    <table class="table text-center table-bordered" id="data" dir="rtl"><tbody><tr class="navbar-inverse" style="color: white">
                       <td>الرقم التعريفي</td>
                       <td>أسم العميل</td>
                       <td>العنوان</td>
                       <td>رقم الهاتف</td>
                       <!--<td>عدد الصور</td>-->
                       <td>الوقت</td>
                       <td>اعدادات</td>
                   </tr>
                 @foreach ($orders as $order)
                 <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->userName}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>
                        <form class="miniform" action="{{route('orders.destroy',$order->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger confirm" type="submit">
                          <i class="fa fa-close"></i> حذف  </button>
                        </form>
                            <a href="{{route('orders.show',$order->id)}}" class="btn btn-success">
                          <i class="fa fa-refresh"></i> عرض  </a>
                    </td>
                  </tr>
                 @endforeach

                </tbody>
            </table>
        </div>
   </div>
@stop
