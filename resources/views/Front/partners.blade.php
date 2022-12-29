
@extends('Front.layout.master')

    @section('title','Partners')

    @section('navbar')
        @include('Front.includes.navbar')
    @stop

    @section('content')

            <section dir="auto">
                <div data-wow-duration="700ms" style=" padding-top: 65px;text-align: center;padding-right: 0;
                                    padding-left: -15px; visibility: visible; animation-duration: 700ms; animation-name: fadeInUp;">
                    <div class="container">
                        <div class="row">
                               <h2 style="color:#FFF" class="modal-header heading center-block" id="head">شركاء النجاح</h2>
                               @foreach ($partnerlogo as $logo )
                               <div class="col-sm-6 col-md-2 col-xs-6 col-lg-2">
                                    <img id="" class="img1" src="{{asset('images').'/'.$logo->photo}}" style="margin-bottom: 25px;;height: 100px;width:100px">

                                </div>
                               @endforeach
                        </div>
                    </div>
                </div>
            </section>
    @stop

    @section('footer')
    @stop
