@extends('layouts.app')
@section('content')
<div class="container">
    <h2>
        Enter your Experience Details
    </h2>

<form action="{{route('experience.update',$experience)}}" method ="POST">
    
        @csrf
        @method('PUT')
        <input type="text" name="job_title" placeholder ="enter your school name"id="job_title" value="{{$experience->job_title}}">
        <input type="text" name="employer" placeholder ="location"id="employer" value="{{$experience ->employer}}">
        <input type="text" name="city" placeholder ="degree"id="city" value="{{$experience ->city}}">
        <input type="text" name="state" placeholder ="study"id="state" value="{{$experience->state}}">
        <input type="date" name="start_date" placeholder ="startdate"id="start_date" value="{{$experience->startdate}}">
        <input type="date" name="end_date" placeholder ="enddate"id="end_date" value="{{$experience->enddate}}">
        <input type="submit" value="save experience details" id="">
    </form>
</div>
    
@endsection