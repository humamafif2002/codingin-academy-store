@extends('layouts.main-layout')

@section('page-content')
    <div class="min-h-screen">
        <div class=" p-5 grid gap-5 lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
            <x-card.product-card />
            <x-card.product-card />
        </div>
    </div>
@endsection
