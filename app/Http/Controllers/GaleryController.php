<?php

namespace App\Http\Controllers;

use App\Models\GaleryModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\ValidationException;

class GaleryController extends Controller
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
        $galery = GaleryModel::all();
        $data = [
            'name_page' => "List Galery"
        ];
        return view('admin.pages.galery.index', compact('galery', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'name_page' => "Add Galery"
        ];
        $existingCategories = GaleryModel::pluck('kategory')->unique()->toArray();
        return view('admin/pages/galery.create', compact('data', 'existingCategories'));
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
        try {
            $validatedData = $request->validate([
                'galery_name' => 'required|max:255',
                'description_galery' => 'required',
                'croppedImage' => 'required|string',
                'galery_category' => 'required',
                'new_galery_category' => 'required_if:galery_category,other',
            ]);

            $category = $validatedData['galery_category'];

            if ($category === 'other') {
                $category = $validatedData['new_galery_category'];
            }

            $namaGambar = $this->saveImage($validatedData['croppedImage'], '../../public_html/img/galery');

            $galery = GaleryModel::create([
                'name' => $validatedData['galery_name'], // Adjusted the key to match your form field
                'kategory' => $category,
                'description' => $validatedData['description_galery'], // Adjusted the key to match your form field
                'uuid' => $this->str::uuid()->toString(),
                'image' => $namaGambar,
            ]);

            return redirect()->route('galery.index')->with('success', 'Gallery added successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'An error occurred while processing your request.');
        }
    }

    public function show($uuid)
    {
        $galery = GaleryModel::firstWhere('uuid', $uuid);

        if ($galery) {
            $data = [
                'name_page' => ("Details for galery " . $galery->name),
            ];
            return view('admin.pages.galery.show', compact('galery', 'data'));
        } else {
            return view('404page');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $galery = GaleryModel::firstWhere('uuid', $uuid);
        $existingCategories = GaleryModel::pluck('kategory')->unique()->toArray();

        if ($galery) {
            $data = [
                'name_page' => ("Update for galery " . $galery->name),
            ];
            return view('admin.pages.galery.update', compact('galery', 'data', 'existingCategories'));
        } else {
            return view('404page');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        // Find the galery by UUID
        $galery = GaleryModel::firstWhere('uuid', $uuid);

        // Check if the galery exists
        if (!$galery) {
            return view('404page');
        }

        try {
            // Validasi umum
            $validatedData = $request->validate([
                'galery_name' => 'required|max:255',
                'description_galery' => 'required',
                'croppedImage' => 'nullable|string',
                'galery_category' => 'required',
                'new_galery_category' => 'required_if:galery_category,other',
            ]);

            $category = $validatedData['galery_category'];

            if ($category === 'other') {
                $category = $validatedData['new_galery_category'];
            }

            // Periksa apakah 'image_input' diberikan
            if ($validatedData['croppedImage'] != null) {
                // Save the new image and update the galery data
                $namaGambar = $this->saveImage($validatedData['croppedImage'], '../../public_html/img/galery');
                $galery->update([
                    'name' => $validatedData['galery_name'],
                    'description' => $validatedData['description_galery'],
                    'kategory' => $category,
                    'image' => $namaGambar,
                ]);
            } else {
                // Update the galery data without changing the image
                $galery->update([
                    'name' => $validatedData['galery_name'],
                    'description' => $validatedData['description_galery'],
                    'kategory' => $category,
                ]);
            }
            return redirect()->route('galery.show', ['galery' => $galery->uuid])->with('success', 'galery updated successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'An error occurred while processing your request.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        $galery = GaleryModel::firstWhere('uuid', $uuid);
        // Hapus gambar terkait jika ada
        if (!empty($galery->image)) {
            $imagePath = public_path('../../public_html/img/galery/') . $galery->image;

            // Periksa apakah file ada sebelum dihapus
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        // Lakukan penghapusan data
        $galery->delete();

        // Redirect atau response setelah penghapusan
        return redirect()->route('galery.index')->with('success', 'galery deleted successfully');
    }
}
