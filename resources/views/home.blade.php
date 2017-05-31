@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6"><p>Newsletter</p></div>
                        <div class="col-md-6"><p>Unsubscribe</p></div>
                    </div>
                    
                    @foreach(Auth::user()->newsletters as $newsletter)
                    <div class="row">
                        <div class="col-md-6">{{ $newsletter->newsletter }}</div>
                        <div class="col-md-6"><a href='/home/{{$newsletter->id}}/{{Auth::user()->id}}/unsubscribe'><button class='btn btn-danger'>Unsubscribe</button></a></div>
                    </div>
                    @endforeach
                    
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3"><a href="/home/{{Auth::user()->id}}/edit"><button class="btn btn-success">User settings</button></a></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
