@extends('layout.layout1')
@section('title', 'list of posts')
@section('content')
    <h1>Single Record</h1>
    <ul>

        <li>
            {{$data['name']}}<br>


            {{$data['age']}}
        </li>


    </ul>
    @endsection

