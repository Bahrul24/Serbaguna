<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product
use App\Models\User;
use Spatie\Permission\Models\Role;


class HomeController extends Controller
{
    public function makeAdmin()
{
    // Cari user dengan ID 1
    $user = User::find(1);

    // Cek apakah role admin sudah ada, jika belum buat
    $role = Role::firstOrCreate(['name' => 'admin']);

    // Assign role admin ke user
    $user->assignRole($role);

    return "User dengan ID 1 telah menjadi admin.";
}
    // Method for the Home page
    public function index()
    {
        return view('index'); // Make sure the `index.blade.php` exists in the `resources/views` folder
    }

    // Method for the About page
    public function about()
    {
        return view('about'); // Make sure the `about.blade.php` exists in the `resources/views` folder
    }

    // Method for the Product page
    public function product()
    {
        // Get all products from the database
        $products = Product::paginate(5); // Mengambil 12 produk per halaman

        // Pass the products data to the `cycle` view
        return view('cycle', compact('products'));
    }

    // Method for the Contact Us page
    public function contact()
    {
        return view('contact'); // Make sure the `contact.blade.php` exists in the `resources/views` folder
    }

    // Method for the Cart page
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Show all products (can be used on the product listing page)
    public function showProducts()
    {
        $products = Product::paginate(5); // Mengambil 12 produk per halaman
        return view('manage-products', compact('products'));
    }

    // Add product to the cart
    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $cart = session()->get('cart', []);

        // If product is already in the cart, increase the quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // Add the product to the cart
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        // Save the cart data to the session
        session()->put('cart', $cart);

        return redirect()->route('cart.index'); // Ensure the route name matches with your routes/web.php
    }

    // Show the Cart page
    public function showCart()
    {
        $cart = session()->get('cart', []); // Retrieve the cart from the session
        return view('cart', compact('cart')); // Ensure the view is cart/index.blade.php
    }

    // Remove product from the cart
    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);

        // If the product exists in the cart, remove it
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart); // Save the updated cart to the session
        }

        return redirect()->route('cart.index'); // Ensure the route name matches with your routes/web.php
    }

    // Create a new product (form view)
    public function createProduct()
    {
        return view('crud'); // Ensure the view exists in resources/views/products/create.blade.php
    }

    // Store a new product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('products.manage')->with('success', 'Product created successfully.');
    }

    // Delete a product from the database
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.manage')->with('success', 'Product deleted successfully.');
    }

    public function manageProducts()
    {
        $products = Product::all(); // Ambil semua produk dari database
        return view('crud', compact('products')); // Kirim data produk ke view 'crud.blade.php'
    }
    
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID
        return view('edit-product', compact('product')); // Pass the product to the view for editing
    }

    // Update product information
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.manage')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.manage')->with('success', 'Product deleted successfully');
    }

    public function create()
    {
        return view('create');
    }

    public function showCyclePage()
    {
        $products = Product::paginate(5); // Mengambil 12 produk per halaman
        return view('cycle', compact('products'));
    }

}


