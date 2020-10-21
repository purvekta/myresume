@extends('layouts.app')
@section('content')
<div class="container">
    <h2>
        Enter your Education Details
    </h2>

    <form action="/education" method ="POST">
        @csrf
        <input type="text" name="school_name" placeholder ="enter your school name"id="school_name">
        <input type="text" name="school_location" placeholder ="location"id="school_location">
        <input type="text" name="Degree" placeholder ="degree"id="Degree">
        <input type="text" name="field_of_study" placeholder ="study"id="field_of_study">
        <input type="date" name="graduation_start_date" placeholder ="startdate"id="graduation_start_date">
        <input type="date" name="graduation_end_date" placeholder ="enddate"id="graduation_end_date">
        <input type="submit" value="save education" id="">
    </form>
</div>
    
@endsection