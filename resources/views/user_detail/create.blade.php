@extends('layouts.app')
@section('content')
<div class="container">
    <h2>
        Tell me something about you
    </h2>

    <form action="/user-detail" method ="POST">
        @csrf
       {{-- @include('partials.form.input',['name'=>'fullname'])
       @include('partials.form.input',['name'=>'emailid'])
       @include('partials.form.input',['name'=>'phone'])
       @include('partials.form.input',['name'=>'address'])
        
       --}}
      
       <x-form.text name="fullname"></x-form.text>
       <x-form.text name="emailid" type="email" ></x-form.text>
       <x-form.text name="phone" type="number"></x-form.text>
       <x-form.text name="address"></x-form.text>
        <br>
       <x-form.textarea name="summary"></x-form.textarea>
       
       <br>
       <input type="submit" value="submit" >
    </form>
</div>
    
@endsection