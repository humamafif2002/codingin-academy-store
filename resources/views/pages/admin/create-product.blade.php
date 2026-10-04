@extends('layouts.admin-layout')

@section('page-content')
    <div class="min-h-screen space-y-5">
        <div class="">
            <h1 class="text-2xl font-semibold">Form Create Product</h1>
            <p class="text-xs text-gray-500">please fill this form to create some product</p>
        </div>
        @if (session('success'))
            <div class="w-sm">
                <div role="alert" class="alert alert-success w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif
        <form action="/admin/product-management/create-product" method="POST"
            class=" p-5 bg-gray-100 inline-block space-y-2">
            @csrf

            <fieldset class="fieldset">
                <legend class="fieldset-legend">Product Name</legend>
                <input type="text" class="input min-w-sm" name="product_name" placeholder="Type here"
                    value="{{ old('product_name') }}" />
                @error('product_name')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Product Description</legend>
                <textarea class="textarea h-24 min-w-sm" placeholder="Bio" name="product_desc"></textarea>
                @error('product_desc')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
            </fieldset>
            <div class="">
                <label class="select min-w-sm">
                    <span class="label">Type</span>
                    <select name="product_category_id">
                        <option value="" disabled selected>Please select some category</option>
                        @foreach ($productCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            @error('product_category_id')
                <p class="label text-red-500 text-xs">{{ $message }}</p>
            @enderror
            <div class="min-w-sm">
                <legend class="fieldset-legend text-xs">Product Price</legend>
                <label class="input w-full">
                    <span class="label">IDR</span>
                    <input min="0" type="number" placeholder="50.000" name="product_price" />
                </label>
                @error('product_price')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-neutral w-full">Simpan</button>
        </form>
    </div>
@endsection
