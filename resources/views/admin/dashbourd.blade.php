@extends('admin.layouts.master')
@section('title','Dashboard')
@section('navbar')
@include('admin.includes.navbar')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-3">

            <div class="stat">
                <h3 class="s1">عدد الطلبات الحديثة</h3>
                <a href="#">{{$uncompletorder}}</a>

            </div>
        </div>

        <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="stat">
                <h3 class="s1">عدد الطلبات المكتملة</h3>
                <a href="{{url('admin/orders?state=1')}}">{{$completorder}}</a>

            </div>
        </div>


        <div class="col-md-3">
            <div class="stat ">
                <h3 class="s3">عدد المنتجات</h3>
                <a href="#">{{$countproduct}}</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat">
                <h3 class="s4">المسؤلون</h3>

                <a href="{{url('admin/users')}}">{{$countuser}}</a>
            </div>
        </div>

    </div>


</div>

<div class="container">
    <div class="row">
        <div class="col col-md-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <span>  المنتجات الحديثة  </span><i class="fa fa-tag"></i>
                </div>
                <div class="panel-body" dir="rtl">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                             <tr>
                                 <th>المنتج</th>
                                 <th>السعر الحالي لكل كيلو</th>

                             </tr>

                            </thead>
                            <tbody>
                                @foreach ($allproducts as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                                        @endforeach
                            </tbody>

                    </table>
                  </div>
                </div>

            </div>
        </div>

        <div class="col col-md-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <span>  الطلبات الحديثة </span>
                    <i class="fa fa-arrow-down"></i>
                </div>
                <div class="panel-body" dir="rtl">

                                                <div class="table-responsive">
                       <table class="table table-hove">
                        <thead>
                          <tr>
                              <th>الاسم</th>
                              <th>العنوان</th>
                              <th>التاريخ</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($neworders as $order)
                            <tr>
                                <td>{{$order->userName}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->created_at}}</td>
                            </tr>
                           @endforeach
                        </tbody>

                       </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- Your footer here -->


<script src="design/js/jquery-1.12.4.min.js"></script>
<script src="design/js/bootstrap.min.js"></script>

<script src="design/js/main.js"></script>

<!--end footer-->

</div></div>


@stop
@section('footer')
@include('admin.includes.footer')
@stop
