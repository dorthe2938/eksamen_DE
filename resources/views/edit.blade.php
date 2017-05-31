@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$user->name}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/home/{{$user->id}}">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{$user->birthday}}">
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label for="newsletters" class="col-md-4 control-label">Newsletters</label>

                            <div class="checkbox">
                                @foreach($newsletters as $newsletter)
                                <label><input id="newsletters" type="checkbox" name="newsletters[]" value="{{$newsletter->id}}" @if($user->hasNewsletters($newsletter->newsletter)) checked @endif>{{$newsletter->newsletter}}</label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/home"><button class="btn btn-primary">Go Back</button></a>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="/home/{{$user->id}}/delete"><button class="btn btn-danger">Delete your account</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
