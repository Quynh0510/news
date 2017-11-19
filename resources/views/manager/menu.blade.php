@extends('layouts.app')

@section('title')
    {{__('label.Admin page')}}
@endsection

@section('content')
    <div class="container">
        @if(Auth::user()->id ==1)
        <div class="col-md-12 well">
            <div class="col-md-10 text-left mb-5">
                <h3 class="col-md-10">Manager Menu</h3>
                <a href="{{route('menu.create')}}" class="col-md-2 btn btn-success">Create Menu
                    <span class="glyphicon glyphicon-plus text-white"></span>
                </a>
            </div>
            <div class="col-md-12">
                <h3 class="col-md-4 text-center">Name</h3>
                <h3 class="col-md-3 text-center">Link</h3>
                <h3 class="col-md-3 text-center">Oder</h3>
            </div>
            @foreach($menu as $menu)
            <div class="col-md-4">
                <div class="col-md-12 text-center well">{{$menu->name}}</div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 text-center well">{{$menu->link}}</div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 text-center well">{{$menu->oder}}</div>
            </div>
            <a href="{{route('menu.edit',['menu_id'=>$menu->id])}}" class="col-md-1 text-info text-right">
                <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class ="col-md-1" data-toggle="modal" data-target="#confirmDelete-{{$menu->id}}">
                <span class="glyphicon glyphicon-remove text-danger"></span>
            </a>
            <form action="{{route('menu.delete',$menu->id)}}" method="post">
                {{ csrf_field() }}
                <div class="modal fade" id="confirmDelete-{{$menu->id}}" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-danger text-center">{{__('label.Confim Delete')}}</h4>
                            </div>
                            <div class="modal-body text-danger text-center">
                                <p>{{__('label.Are you sure ?')}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger col-md-6" >{{__('label.Yes')}}</button>
                                <button type="button" class="btn btn-default col-md-6" data-dismiss="modal">{{__('label.No')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>

        <div class="col-md-12 well">
            <h3 class="col-md-10">Manager User</h3>
        </div>
        @else
        @endif
        <div class="col-md-12 well">
            <h3 class="col-md-10">Manager Song</h3>
        </div>
        <div class="col-md-12 well">
            <h3 class="col-md-10">Manager Album</h3>

        </div>
        <div class="col-md-12 well">
            <h3 class="col-md-10">Manager Artist</h3>
        </div>
    </div>
@endsection
