@props([
    'products' => [],
]);

<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Product Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach ($products as $index => $product)
                <tr class="hover:bg-base-300">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <div class="flex items-center gap-2">
                            <a href="/admin/product-management/edit-product/{{ $product->id }}"
                                class="btn btn-warning">Edit</a>
                            <a href="/admin/product-management/delete-product/{{ $product->id }}"
                                class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
