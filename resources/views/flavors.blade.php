@extends('layouts.master')

@section('content')

<div class="flex-center position-ref full-height">

<div class="content">
    <div class="title m-b-md">
        {{ $comboOption }}
    </div>

    <H2>R$ 5,00</H2>

    <!-- <div class="links">
        <h3>Sabores</h3>
        @foreach ($flavors as $flavor)
            <a href=""> {{ $flavor->name }}</a>
        @endforeach
    </div> -->
</div>
</div>

@endsection