@extends('admin.layouts.master')
@section('title','Show Order')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 all">
            <div class="stat">
                <div class="s2">
                    <h2>بيانات العميل</h2>
                </div>
                <div class="data">
                    <p>
                        <span class="title">أسم العميل: </span>
                        <span class="info">{{$order->userName}}</span>
                    </p>
                    <p>
                        <span class="title">العنوان: </span>
                        <span class="info">{{$order->address}}</span>

                    </p>
                    <p>
                        <span class="title">الهاتف: </span>
                        <span class="info">{{$order->phone}}</span>
                    </p>

                </div>
                <div class="gullary">


                </div>
                <div class="control">
                    <form class="miniform" action="{{route('orders.destroy',$order->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger confirm" type="submit">
                        <i class="fa fa-close"></i> حذف  </button>
                      </form>

                      @if ($order->state==0)
                      <form class="miniform" action="{{route('orders.update',$order->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success confirm" type="submit">
                        <i class="fa fa-close"></i> اكتمل  </button>
                      </form>
                      @endif

                </div>
            </div>
        </div>

    </div>

</div>
@stop
