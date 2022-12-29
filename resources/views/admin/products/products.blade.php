@extends('admin.layouts.master')
@section('title','Products')
@section('navbar')
@include('admin.includes.navbar')
@stop

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class=""style="padding-top:50px"></div>
        <p class="h3 text-center">أدارة المنتجات</p>
                <table class="table text-center table-responsive table-bordered" dir="auto">
                    <tbody>
                        <tr class="navbar-inverse" style="color: white">
                             <td>الرقم التعريفي</td>
                             <td> أسم المنتج</td>
                             <td>السعر</td>
                             <td>الوصف</td>
                             <td>التاريخ</td>
                             <td>اعدادات</td>
                         </tr>
                        @foreach ($products as $product)

                         <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discription}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <form class="miniform" action="{{route('products.destroy',$product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger confirm" type="submit"><i class="fa fa-close"></i> حذف</button>
                                </form>
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-success">
                                <i class="fa fa-edit"></i> تعديل  </a>
                            </td>
                        </tr>

                       @endforeach
                    </tbody>
                </table>
        </div>
        <div class="col-md-12 text-center">
            <a href="{{route('products.create')}}" class="btn btn-success">
                منتج جديد <i class="fa fa-plus fa-1x"></i>
            </a>
        </div>
    </div>
</div>

@stop
