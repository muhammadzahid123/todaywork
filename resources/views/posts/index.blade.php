
@extends('layout.layout1')
@section('title', 'list of posts')
@section('content')
<div class="content">
    @section('navigation')
     <ul>
         <li>Home</li>
         <li>About</li>
         <li>Contact</li>
         <li>Gallery</li>
     </ul>
    @endsection
</div>
@component('component.messages', ['title'=> '<span> title component</span>'])
this is slot message
@endcomponent
<ul>
    @foreach ($data as $row )
    <li>
        {{$row['name']}}<br>


        {{$row['company']}}
    </li>
    @endforeach

</ul>
@endsection
