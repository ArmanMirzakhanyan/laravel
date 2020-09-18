@extends('layouts.app')
@section('content')
    <h2>Last Posts</h2>
    @if(count($posts)>0)
        @foreach ($posts as $id=>$post)
            <h3><a href="{{route('single_post',['id'=>$id])}}">{{$post}}</a></h3>
        @endforeach
    @endif
@endsection


