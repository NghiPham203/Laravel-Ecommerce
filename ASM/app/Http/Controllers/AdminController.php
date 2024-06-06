<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

    function adProducts(Request $request){
        $categories = category::orderBy('name', 'asc')->get();

        $query = product::orderBy('id', 'desc');

        if ($request->has('category') && $request->category != 'all') {
            $query->where('category_id', $request->category);
        }

        $products = $query->paginate(5);

        return view('admin.adProducts', compact('categories', 'products'));
    }

    public function storeProduct(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'view' => 'required|integer',
            'sold' => 'required|integer',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $imageName);
        }

        // Create a new product
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'view' => $request->view,
            'sold' => $request->sold,
        ]);

        // Redirect to the products page with a success message
        return redirect()->route('adProducts')->with('success', 'Sản phẩm mới đã được thêm');
    }

    public function productUpdateForm()
    {

    }
    public function updateProduct(Request $request, $id)
    {
        $id = $request->input('id');

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'view' => 'required|integer',
            'sold' => 'required|integer',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->view = $request->input('view');
        $product->sold = $request->input('sold');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $imageName);

            if ($product->image) {
                Storage::delete('public/uploads/' . $product->image);
            }

            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('adProducts')->with('success', 'Sản phẩm đã được cập nhật');
    }

    public function deleteProduct($id){
        $product=product::find($id);
       $imgpath = "public/uploads".$product->img;
       if (Storage::exists($imgpath)) {
           Storage::delete($imgpath);
       }
        $product->delete();
        return redirect()->route('adProducts');
    }

}
