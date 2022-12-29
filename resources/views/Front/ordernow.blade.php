@extends('Front.layout.master')
    @section('title','ORDER NOW')



@section('navbar')
    @include('Front.includes.navbar')
@stop



@section('content')

<div class="" style="padding-top: 4%">
    <div class="container">
            <div class="row">
                @if(Session::has('message'))
                <div class='col-md-6 col-md-offset-3 col-xs-12'>
                <div  class="alert text-center " role="alert">
                    {{Session::get('message')}}

                 </div>
                 <div class="col-md-6 col-md-offset-3 col-xs-12 text-center">
                 <img src="{{asset('image/right.png')}}">
                 </div>
                </div>
            </div>
                @else
            <div class="row">
                <div class="col-md-6 center-block col-md-push-3 text-center col-xs-12">
                <form class=" " id="mainForm"
                       action="{{url('/saveorder')}}" method="POST" dir="auto" enctype="multipart/form-data">
                       {{-- enctype="multipart/form-data" --}}
                   @csrf
                   {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" /> --}}


                      <p class="h2">أكتب بياناتك</p>
                    <fieldset class="form-group">
                        <input class="form-control" type="text" name="name" placeholder=" الاسم " required/>
                        @error('name')
                            <p class="error">{{$message}}</p>
                        @enderror
                        {{-- javascript validator --}}
                        {{-- <p class="erorr"> يجب أدخال أسمك</p> --}}
                    </fieldset>
                    <fieldset class="form-group">
                        <select class="form-control" name="country" required id="country" style="padding:5px" dir="auto" required>
                            <option value="">اخترالمدينة </option>
                            @foreach ($country as $country)
                            <option value="{{$country->c_name}}">{{$country->c_name}}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <small class="error">{{$message}}</small>
                        @enderror
                        {{-- <p class="erorr"> يجب أدخال أسم المدينة</p> --}}
                    </fieldset>
                        <fieldset class="form-group">
                                <input class="form-control" type="text" name="address" placeholder="العنوان " required/>
                                @error('adress')
                                <small class="error">{{$messge}}</small>
                                @enderror
                        </fieldset>
                            {{-- <p class="erorr"> يجب أدخال عنوانك بالكامل</p> --}}
                            {{--<p class="erorr"> يجب أدخال رقم الهاتف</p> --}}


                        <fieldset class="form-group">
                            <input class="form-control" type="tel" name="phone" id='phone'placeholder="رقم الهاتف " required />
                            <br>
                          </fieldset>

                          <fieldset class="form-group">
                            <input class="form-control" type="file"   name="image"  required />
                            <br>
                          </fieldset>
                            <fieldset class='form-group'>
                                <button  type="submit" class="btn btn-success" id="next">أطلب الان</button>
                            </fieldset>

                            {{-- <input type="hidden" value='upload.img' name='photo' /> --}}

                         {{-- <p id="message1"> يجب أكمال البيانات أولا....</p> --}}

                        </div>
                        {{-- <input type='hidden' name="photo" id="photo"> --}}

                        {{-- <input class="form-control" id="order" Type="submit" value="أطلب" form="mainForm"/> --}}


                    </form>

                {{-- you can add uploade image to this form --}}

                {{-- <div class='content' id="panel">
                    <form action="upload.php" class="dropzone" id="dropzonewidget">

                    </form>
                </div> --}}


            </div>
            @endif
        </div>
   </div>
</div>
@stop
