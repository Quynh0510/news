@extends('layouts.app')
@section('title')
    Detail Album
@endsection
@section('content')
    <div>
        <div class="container alert">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('storage/'.$detail_album->image)}}">
                </div>
                <div class="col-md-6">
                    <h3>Album : {{$detail_album->name}}</h3>
                    <h3>Description</h3>
                    @if($detail_album->description !=null)
                        <pre class="col-md-12"><h4>{{$detail_album->description}}</h4></pre>
                    @else
                        <pre class="col-md-12">The Description does not exist. Do you want to <a href="{{route('album.edit',$detail_album->id)}}">new description</a> ?</pre>
                    @endif
                </div>
                <div class="col-md-2">
                    <div class="form-group col-md-12">
                        <a class=" col-md-12 btn btn-danger text-white" role="button" data-toggle="modal" data-target="#confirmDelete-{{$detail_album->id}}">
                            Remove
                        </a>
                        <form action="{{route('album.delete',$detail_album->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="modal fade" id="confirmDelete-{{$detail_album->id}}" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger text-center">Confim Delete</h4>
                                        </div>
                                        <div class="modal-body text-danger text-center">
                                            <p>Are you sure ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger col-md-6" >Yes</button>
                                            <button type="button" class="btn btn-default col-md-6" data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="form-group col-md-12">
                        <a href="{{route('album.showEdit', ['id' => $detail_album->id])}}" class=" col-md-12 btn btn-default" role="button">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container alert">
            <div class="row">
                <div style="overflow: hidden ; height: 300px" class="col-md-12">
                    <img width="100%"  src="http://thewallpaper.co/wp-content/uploads/2016/02/seen-on-badchi-minions-the-competition-widescreen-movie-for-kids-hd-1920x1080.jpg">
                </div>
            </div>
            <div class="container">
                <div>
                    <table class="table">
                        <tbody>
                        @foreach($detail_album->songs as $key=>$song)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$song->name}}</td>
                            <td>
                                <sub>

                                    <a data-toggle="modal" data-target="#confirmDelete-{{$song->id, $detail_album->id}}">
                                        <span class="glyphicon glyphicon-remove" ></span>
                                    </a>

                                    <form action="{{route('album.remove',[$detail_album->id,'song'=>$song->id])}}" method="post">

                                        {{ csrf_field() }}
                                        <div class="modal fade" id="confirmDelete-{{$song->id, $detail_album->id}}" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-danger text-center">Confim Remove</h4>
                                                    </div>
                                                    <div class="modal-body text-danger text-center">
                                                        <p>Are you sure ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger col-md-6" >Yes</button>
                                                        <button type="button" class="btn btn-default col-md-6" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </sub>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-success">Add Song</button>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('song.upload',['id'=>$detail_album->id])}}"  class="btn btn-default">
                            <span class="glyphicon glyphicon-plus"></span> Create Song
                        </a>
                    </div>
                </div>
                <div class="row">
                    <h2 class="col-md-12">Lyric</h2>
                    <pre class="col-md-12"><h4>The lyric does not exist. Do you want to <a href="{{route('album.edit',$detail_album->id)}}">new lyric</a> ?</h4></pre>
                </div>
            </div>
        </div>
    </div>
@endsection



