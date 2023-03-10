@extends('jarboe::layouts.main')

@section('content')
    {{$post->id}}
    {{$post->title}}
    {!!$post->content !!}
@endsection