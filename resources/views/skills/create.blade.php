@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Add Your Skill details</h2>


    <form action="/skill" method='POST'>
        @csrf

        <input type="text" name='name' placeholder='skill name'>

        <input type="text" name='rating' placeholder='rating'>
 <input type="submit" value="Save">

    </form>

</div>


@endsection
