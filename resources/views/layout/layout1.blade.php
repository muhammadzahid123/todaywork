<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .container
        {
            max-width: 960px;
            margin:auto;
            background: #ccc;
            padding: 0 20px;
        }
    </style>
</head>
<body>


{{-- <?php if($users) { ?> --}}
{{-- <?php foreach ($users as $users){?> --}}
{{-- <?php echo $user->name; ?> --}}

{{-- <?php } ?> --}}
{{-- <?php }?> --}}



    {{-- @if ($users)
    @foreach ($users as $user )
     <li>{{$user->name}} </li>
    @endforeach

    @endif

    @forelse ($users as $user)
    <li>{{$user->name}} </li>
    @empty
    <li>{{'no user exits'}} </li>
    @endforelse
<div class="container">
        @hasSection('navigation')
<div class="pull-right">
    @yield('navigation')
</div>
<div class="clearfix"></div>
        @endif
    <h2>@yield('title')</h2>

    <h2>@yield('title')</h2> --}}
@if (Session()->has('message'))
   <p>Session()->get('message')</p>
@endif
@yield('content')
</div>
</body>
</html>
