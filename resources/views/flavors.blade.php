@extends('layouts.master')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="links">
        @foreach ($flavors as $flavor)
            <a href=""> {{ $flavor->name }}</a>
        @endforeach
    </div>

</div>

@endsection