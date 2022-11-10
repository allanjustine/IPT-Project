@extends('base')

@extends('navbar')

@section('title', 'Admin')

@section('content')
    <div class="container m-5">
        <livewire:admin.index/>
    </div>

@endsection
