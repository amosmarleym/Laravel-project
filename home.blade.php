@extends('master')

@section('title','Homepage')

@section('content')

Recent Messages:

<ul>
    @foreach($messages as messages )
    <li>{{$message->title}} -{{$message->content}}</li>
    @endforeach
</ul>
<h1>Content!</h1>
@endsection