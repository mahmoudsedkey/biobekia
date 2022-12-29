<!DOCTYPE >
<html>
    <head>
        <title>Product</title>
    </head>
        <body>

            <form action="{{url('products')}}" method="POST">
                @csrf
@if(Session::has('success'))

<div>{{Sesstion::get('success')}}</div>
@endif
                  @error('title')
                   <p>{{$message}}</p>
                  @error

                    <input type="text" name="title" placeholder="Title"/>
                    <input type="text" name="decription" placeholder="Description"/>
                    <input type="number" name="price" placeholder="Price"/>
                    <input type="text" name="image" placeholde="Image "/>
                    <input type="number" name="available" placeholder="Available" />
                    <input type="number" name="user_id" placeholder="User id" />
                    <input type="submit" value="SAVE">
            </form>
        <body>
</html>

