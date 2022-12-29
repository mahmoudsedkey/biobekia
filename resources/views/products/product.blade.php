
@extends('layout.mastr')
@section('content')
@foreach ($allProducts as $product)
      <div>
            <h1>id</h1>
            <h2>{{$product->id}}</h2>
            <h2>{{$product->title}}</h2>
            <h2>{{$product->decription}}</h2>



      </div>
@endforeach
        {{-- <h1>product title</h1>
        <h2>{{$allProducts}}</h2>
        <h1>description</h1>
        <h2>{{$allProducts}}</h2> --}}
@stop
