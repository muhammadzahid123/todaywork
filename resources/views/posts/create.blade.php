

@extends('layout.layout1')
@section('title')
@section('content')
<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    {{-- @method('PUT') --}}

 <input type="number" class="form-control" name="email1" value="{{old('email1')}}"><br>
 @error('email1')
  <p>{{$message}}</p>
   @enderror

 <input type="text" class="form-control" name="email2" value="{{old('email2')}}"><br>
  @error('email2')
  <p>{{$message}}</p>
   @enderror

 <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old('content')}}</textarea><br>
 @error('content'))
  <p>{{$message}}</p>
 @enderror



 <label for="computer">Computer <input type="checkbox" name="check['computer']['id']" value="computer" id=""></label>
 <label for="general">General <input type="checkbox" name="check['computer']['id']" value="general" id=""></label>
 <label for="science">Science <input type="checkbox" name="check['science']['id']" value="science" id=""></label>
 <label for="arts">Arts<input type="checkbox" name="check['arts']['id']" id="" value="arts"></label>
 <label for="business">Business <input type="checkbox" name="check['bisiness']['id']" value="business" id=""></label><br><br>
 @error('check')
 <p>{{$message}}</p>
 @enderror



 <label for="">Select an Image: <input type="file" name="photo"></label>
 @error('photo')
 <p>{{$message}}</p>
  @enderror

<label for="">Select Start Date: <input type="date" name="start_date"></label>
 @error('start_date')
  <p>{{$message}}</p>
   @enderror

<label for="">Select End Date: <input type="date" name="end_date"></label>
 @error('end_date'))
  <p>{{$message}}</p>
   @enderror

<br>
<label for="">Enter your website Address: <input type="url" name="website" id=""></label>
@error('website'))
<p>{{$message}}</p>
@enderror



<br>
<label for="">Accept TOS: <input type="checkbox" name="tos" id="" value="1"></label><br>
@error('tos')

<p>{{$message}}</p>
 @enderror



<input type="submit" value="Add New Post"><br>
</form>

@endsection
