@extends('layouts.app')

@section('title')
        {{$artist->name}}
@endsection

@section('content')
    <div class="container well">
        <div>
            <div class="col-md-12 well" style="overflow: hidden ; height: 300px">
                <img width="100%" hight="300px" src="https://kenh14cdn.com/thumb_w/600/dpA6uSv3GtBzvbRT7Y4EBtfN37yCA/Image/2014/10/mt3-08c79.jpg">
                <div class="text-image text-white col-md-4 text-center">
                    <h1>{{$artist->name}}</h1>
                    <h2>{{$artist->stage_name}}</h2>
                    <h2>{{$artist->dob}}</h2>
                </div>
            </div>

        </div>
        <div class="col-md-12 well mt-0">
            <ul class="nav nav-tabs">
                <li class="active"><a href="">Tieu su</a></li>
                <li><a href="">Bai hat</a></li>
            </ul>
            <div class="col-md-12 well">
                <h4 class="col-md-2 text-center">Tieu su</h4>
                <div class=" col-md-10">
                    <h5 class="'text-left">
                        {{$artist->description}}
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
