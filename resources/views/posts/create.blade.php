

@extends('layout.layout1')
@section('title')
@section('content')
<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
 <input type="number" class="form-control" name="email1" value="{{old('email1')}}"><br>
 <input type="text" class="form-control" name="email2" value="{{old('email2')}}"><br>

  @if($errors->has('email1'))
     <ul>
        @foreach ($errors->get('email1') as $error)
      <p>{{$error}}</p>
        @endforeach
     </ul>
   @endif
 <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old('content')}}</textarea><br>
 @if($errors->has('content'))
 <ul>
    @foreach ($errors->get('content') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
 <label for="computer">Computer <input type="checkbox" name="check['computer']['id']" value="computer" id=""></label>
 <label for="general">General <input type="checkbox" name="check['computer']['id']" value="general" id=""></label>
 <label for="science">Science <input type="checkbox" name="check['science']['id']" value="science" id=""></label>
 <label for="arts">Arts<input type="checkbox" name="check['arts']['id']" id="" value="arts"></label>
 <label for="business">Business <input type="checkbox" name="check['bisiness']['id']" value="business" id=""></label><br><br>
 @if($errors->has('check'))
 <ul>
    @foreach ($errors->get('check') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
 <label for="">Select an Image: <input type="file" name="photo"></label>
 @if($errors->has('photo'))
 <ul>
    @foreach ($errors->get('photo') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
<br>

<label for="">Select Start Date: <input type="date" name="start_date"></label>
 @if($errors->has('start_date'))
 <ul>
    @foreach ($errors->get('start_date') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
<br>

<label for="">Select End Date: <input type="date" name="end_date"></label>
 @if($errors->has('end_date'))
 <ul>
    @foreach ($errors->get('end_date') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
<br>
<label for="">Enter your website Address: <input type="url" name="website" id=""></label>
@if($errors->has('website'))
 <ul>
    @foreach ($errors->get('website') as $error)
  <p>{{$error}}</p>
    @endforeach
 </ul>
@endif
<br>
<label for="">Accept TOS: <input type="checkbox" name="tos" id="" value="1"></label><br>
@if($errors->has('tos'))
<ul>
   @foreach ($errors->get('tos') as $error)
 <p>{{$error}}</p>
   @endforeach
</ul>
@endif
<input type="submit" value="Add New Post"><br>
</form>

@endsection
