<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{

    protected $str;
    protected $image;

    public function __construct(Str $str, Image $image)
    {
        $this->str = $str;
        $this->image = $image;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductModel::all();
        $data = [
            'name_page' => "List Products"
        ];
        return view('admin.pages.product.index', compact('products', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'name_page' => "Add Products"
        ];
        return view('admin/pages/product.create', compact('data'));
    }


    protected function saveImage($image, $basePath)
    {
        $data_start_index = strpos($image, ',') + 1;
        $base64_data = substr($image, $data_start_index);
        $decoded_data = base64_decode($base64_data);

        $uuid = $this->str::uuid();
        $namaGambar = $uuid . '.webp';
        $path = public_path($basePath) . '/' . $namaGambar;

        $img = $this->image::make($decoded_data);
        $img->save($path);

        return $namaGambar;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        try {
            $validatedData = $request->validate([
                'product_name' => 'required|max:255',
                'description_product' => 'required',
                'croppedImage' => 'required|string',
            ]);

            $namaGambar = $this->saveImage($validatedData['croppedImage'], '../../public_html/img/products');

            $product = ProductModel::create([
                'name' => $validatedData['product_name'],
                'description' => $validatedData['description_product'],
                'uuid' => $this->str::uuid()->toString(),
                'image' => $namaGambar,
            ]);

            return redirect()->route('products.index')->with('success', 'Product added successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'An error occurred while processing your request.');
        }
    }

    public function show($uuid)
    {
        $product = ProductModel::firstWhere('uuid', $uuid);

        if ($product) {
            $data = [
                'name_page' => ("Details for product " . $product->name),
            ];
            return view('admin.pages.product.show', compact('product', 'data'));
        } else {
            return view('404page');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $product = ProductModel::firstWhere('uuid', $uuid);

        if ($product) {
            $data = [
                'name_page' => ("Update for product " . $product->name),
            ];
            return view('admin.pages.product.update', compact('product', 'data'));
        } else {
            return view('404page');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        // Find the product by UUID
        $product = ProductModel::firstWhere('uuid', $uuid);

        // Check if the product exists
        if (!$product) {
            return view('404page');
        }

        // dd($request->all());

        try {
            // Validasi umum
            $validatedData = $request->validate([
                'product_name' => 'required|max:255',
                'description_product' => 'required',
                'croppedImage' => 'string|nullable', // Assuming 'croppedImage' should not be null or empty
                // 'image_input' => $request->hasFile('image_input') ? 'required|image|mimes:jpeg,png,jpg,gif|max:2048' : '',
            ]);

            // Periksa apakah 'image_input' diberikan
            if ($validatedData['croppedImage'] != null) {
                // Save the new image and update the product data
                $namaGambar = $this->saveImage($validatedData['croppedImage'], '../../public_html/img/products');
                $product->update([
                    'name' => $validatedData['product_name'],
                    'description' => $validatedData['description_product'],
                    'image' => $namaGambar,
                ]);
            } else {
                // Update the product data without changing the image
                $product->update([
                    'name' => $validatedData['product_name'],
                    'description' => $validatedData['description_product'],
                ]);
            }
            return redirect()->route('products.show', ['product' => $product->uuid])->with('success', 'Product updated successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'An error occurred while processing your request.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        $product = ProductModel::firstWhere('uuid', $uuid);
        // Hapus gambar terkait jika ada
        if (!empty($product->image)) {
            $imagePath = public_path('../../public_html/img/products/') . $product->image;

            // Periksa apakah file ada sebelum dihapus
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        // Lakukan penghapusan data
        $product->delete();

        // Redirect atau response setelah penghapusan
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
