@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->name}}: Your opcomming birthdays</div>

                <div class="panel-body">
                    @foreach ($upcommingDays as $day)
                        <p>{{ $day }}</p>
                    @endforeach
                    
                        <a href="/home"><button class="btn btn-primary">Back to Home</button></a>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
