@props(['name','type'=>'text','required'=>'required'])
<x-form.input-wrapper>
<x-form.label :name="$name"/>
<input {{$required}} type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" value="{{old($name)}}">
<x-form.error :name="$name"/>
</x-form.input-wrapper>
