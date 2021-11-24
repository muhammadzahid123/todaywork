
@extends('layout.layout1')
@section('title', 'list of posts')
@section('content')
<ul>
    @foreach ($data as $row )
    <li>
        {{$row['name']}}<br>


        {{$row['company']}}
    </li>
    @endforeach

</ul>
@endsection
