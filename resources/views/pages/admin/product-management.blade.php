@extends('layouts.admin-layout')

@section('page-content')
    <div class="min-h-screen space-y-5">
        <div class="flex lg:flex-row md:flex-row flex-col justify-between lg:items-end md:items-end items-start gap-5">
            <div class="">
                <h1 class="text-2xl font-semibold">Product Management</h1>
                <p class="text-xs text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, dolore.</p>
            </div>
            <a href="/admin/product-management/create-product" class="btn btn-neutral">Create Product</a>
        </div>
        

        <div class="">
            <x-table.product-table :products="$products" />
        </div>
    </div>
@endsection
