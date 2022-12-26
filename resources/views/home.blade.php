@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate enim eveniet quod sed! Ab assumenda commodi corporis deserunt dignissimos earum incidunt maiores necessitatibus omnis perspiciatis quam, quia repellendus, reprehenderit sequi!</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
{{--    @include('inc.button')--}}
@endsection
