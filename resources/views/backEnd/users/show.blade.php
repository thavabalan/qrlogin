@extends('backLayout.app')
@section('title')
Show user  {{$user->first_name}}
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">The user :  {{$user->first_name}}</div>

        <div class="panel-body">
  
 <ul>
        <div class="row">
             {!! Form::label('first_name','First name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {{$user->first_name}}
            </div>
        </div>
       
       <div class="row">
             {!! Form::label('last_name', 'Last name', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
               {{$user->last_name}}
            </div>
        </div>

        <div class="row">
             {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
               {{$user->email}}
            </div>
        </div>

         <div class="row">
             {!! Form::label('role', 'Role', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-sm-6">
                {{$user->roles->first()->name}}
            </div>
        </div>
    
        <div class="row">
            @if(Sentinel::getUser()->QRpassword)
  <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->color(38, 38, 38, 0.85)->backgroundColor(255, 255, 255, 0.82)->size(200)->generate(Sentinel::getUser()->QRpassword)) !!} ">
  <p> This is your qr code , Download it into your mobile</p>
  @endif
        <br>
        <div class="col-md-6 col-md-offset-4">
            <a href="{{route('user.index')}}" class="btn btn-default">Return to  all users</a>
            </div>
        </div>
    </ul>
    </div>
    </div>                

@stop