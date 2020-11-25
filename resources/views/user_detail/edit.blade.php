@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Tell us something about you</h2>


    <form action="{{route('user-detail.update', $userDetail)}} " method='POST'>
        @csrf
        @method('PUT')

        <label for="fname">First name:</label>
        <input type="text" name="fullname" id="fullname" value="{{"$userDetail->fullname"}}"><br>
        <label for="fname">Email ID:</label>
     <input type="text" name="emailid" id="emailid" value="{{"$userDetail->emailid"}}"><br>
     <label for="fname">Phone:</label>
     <input type="text" name="phone" id="phone" value="{{"$userDetail->phone"}}"><br>
     <label for="fname">Address:</label>
     <input type="text" name="address" id="address" value="{{"$userDetail->address"}}"><br>
     <label for="fname">Summary</label>
     <input type="text" name="summary" id="summary" value="{{"$userDetail->summary"}}"><br>
     
     <input type="submit" value="submit" id="">
       
        
        {{--<x-form.text name="fullname" :value="$userDetail->fullname"></x-form.text>
        <x-form.text name="emailid" type="emailid" :value="$userDetail->emailid"></x-form.text>
        <x-form.text name="phone" :value="$userDetail->phone"></x-form.text>
        <x-form.text name="address" :value="$userDetail->address"></x-form.text>

        <x-form.textarea name="summary" :value="$userDetail->summary"></x-form.textarea>

        <x-form.submit> </x-form.submit>
            ---}}
 

    </form>

</div>

@endsection
