@props(['name','type'=>'text','value'=>null])
<div class="form-group">
<label for={{$name}}>{{ucfirst($name)}}</label>
    <input type="{{$type}}"
class="form-control" name="{{$name}}" placeholder="{{$name}}"value="{{$value}}">
    
  </div>

  