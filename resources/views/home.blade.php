@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6"><p><strong>Subscribed Newsletter(s):</strong></p></div>
                        <div class="col-md-6"><p><strong>Unsubscribe your newsletter(s):</strong></p></div>
                    </div>
                    
                    @if(count(Auth::user()->newsletters) > 1)
                        @foreach(Auth::user()->newsletters as $newsletter)
                        <div class="row">
                            <div class="col-md-6">{{ $newsletter->newsletter }}</div>
                            <div class="col-md-6">
                                <a href='/home/{{$newsletter->id}}/{{Auth::user()->id}}/unsubscribe'><button class='btn btn-danger'>Unsubscribe</button></a>
                            </div>
                        </div>
                        <br/>
                        @endforeach
                    @else
                        @foreach(Auth::user()->newsletters as $newsletter)
                        <div class="row">
                            <div class="col-md-6">{{ $newsletter->newsletter }}</div>
                            <div class="col-md-6">
                                <p>You must be assigned at least one Newsletter!</p>
                            </div>
                        </div>
                        <br/>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-md-4"><a href="/home/{{Auth::user()->id}}/birthday"><button class="btn btn-primary">See list of upcomming birthdays</button></a></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><a href="/home/{{Auth::user()->id}}/edit"><button class="btn btn-primary">User settings</button></a></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
