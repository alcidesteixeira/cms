@extends('layouts.app')

@section('content')


    <h1>Edit {{$post->title}}</h1>

    <form method="post" action="/posts/{{$post->id}}">

        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}">
        {{csrf_field()}}
        <input type="submit" name="Submit" value="Edit">

    </form>

    <form method="post" action="/posts/{{$post->id}}">

        {{csrf_field()}}

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" value="DELETE">

    </form>
@stop

@section('footer')

@stop