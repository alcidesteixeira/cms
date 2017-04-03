<!-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <h1>Specs Sheet</h1>

    <form>

        Altura: <input type="text" value="{{$altura}}" />
        <br />
        Peso: <input type="text" value="{{$peso}}" />
        <br />
        Idade: <input type="text" value="{{$idade}}" />

    </form>
</div>
</body>
</html>
-->
@extends('layouts.app')
@section('content')
    <h2>olá mundo!</h2>
    <h3>specsheet</h3>
    <h4>altura: {{$altura}}</h4>
    <h4>peso: {{$peso}}</h4>
    <h4>idade: {{$idade}}</h4>
@stop

@section('footer')

@stop