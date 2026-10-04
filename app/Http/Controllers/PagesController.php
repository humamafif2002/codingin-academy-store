<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $title = 'Home';
        return view('pages.home', compact('title'));
    }
    public function admin()
    {
        $title = 'Admin Panel';
        return view('pages.admin.dashboard', compact('title'));
    }

    public function productManagement()
    {
        $title = 'Admin Panel | Product Management';
        $products = Product::with('category')->get();

        return view('pages.admin.product-management', compact('title', 'products'));
    }

    public function createProductView()
    {
        $title = 'Admin Panel | Create Product';
        $productCategories = ProductCategory::all();
        return view('pages.admin.create-product', compact('title', 'productCategories'));
    }
    public function editProductView(int $id)
    {
        $title = 'Admin Panel | Edit Product';
        $currentProduct = Product::find($id);
        $productCategories = ProductCategory::all();
        return view('pages.admin.edit-product', compact('title', 'currentProduct', 'productCategories'));
    }
    public function editProduct(Request $request)
    {

        $currentProduct = Product::find($request->id);

        $currentProduct->update([
            'name' => $request->product_name,
            'desc' => $request->product_desc,
            'price' => $request->product_price,
            'product_category_id' => $request->product_category_id,
        ]);
        return redirect()->back()->with('success', 'Berhasil mengubah data produk ke database');
    }

    public function createProduct(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required|max:255',
            'product_category_id' => 'required',
            'product_price' => 'required|numeric|min:0',
        ], [
            'product_name.required' => 'Nama produk harus diisi'
        ]);
        $data = [
            'name' => $request->product_name,
            'desc' => $request->product_desc,
            'price' => $request->product_price,
            'product_category_id' => $request->product_category_id
        ];
        Product::create($data);

        return redirect()->back()->with('success', 'Berhasil menyimpan data produk ke database');
    }

    public function attributeManagementView()
    {
        $title = 'Admin Panel | Attribute Management';
        return view('pages.admin.product-attribute-management', compact('title'));
    }
    public function deleteProduct(int $id)
    {
        $currentProduct = Product::find($id);
        $currentProduct->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data produk di database');
    }
}
