@extends('layouts.app')
@section('content')
<div class="container">
    <h2>
        Enter your Skill Details
    </h2>

<form action="{{route('skill.update',$skill)}}" method ="POST">
    
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder ="name"id="name" value="{{$skill->name}}">
        <input type="text" name="rating" placeholder ="rating"id="rating" value="{{$skill ->rating}}">
        <input type="submit" value="save skill details" id="">
    </form>
</div>
    
@endsection