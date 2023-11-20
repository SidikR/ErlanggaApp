<?php

namespace App\Http\Controllers;

use App\Models\GaleryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $meta = [
            'title' => "PT Erlangga Nusantara Ekspor: Exporting High-Quality Coconut Products Globally",
            'author' => "Nasya Erlangga Nusantara Ekspor",
            'description' => "PT Erlangga Nusantara Ekspor: Your Trusted Source for High-Quality Coconut-Based Products. Explore our premium range of coconut sugar, fiber, and peat, exported globally from Indonesia. Rely on our commitment to exceptional quality and reliability for your international needs",
            'keywords' => "CoconutExports, PremiumQuality, IndonesianProducts, CoconutSugar, CoconutFiber, CoconutPeat, GlobalExport, ErlanggaNusantara, QualityAssurance, ReliableSupplyChain, InternationalTrade"
        ];

        $carousel = [
            [
                'id' => 1,
                'image' => 'img/carousel/carousel1.jpeg',
                'alt' => 'ini Carousel 1'
            ],
            [
                'id' => 2,
                'image' => 'img/carousel/carousel2.jpeg',
                'alt' => 'ini Carousel 2'
            ],
            [
                'id' => 3,
                'image' => 'img/carousel/carousel3.jpeg',
                'alt' => 'ini Carousel 3'
            ]
        ];

        $data = [
            'carousel' => $carousel

        ];
        $products = ProductModel::all();
        $totalData = $products->count();
        $gallery = GaleryModel::all();
        $existingCategories = GaleryModel::pluck('kategory')->unique()->toArray();
        $existingCategories = array_values($existingCategories);

        // dd($existingCategories);

        return view('pages/landing-page/landing-page', [
            'data' => $data,
            'meta' => $meta,
            'products' => $products,
            'gallery' => $gallery,
            'existingCategories' => $existingCategories,
            'totalData' => $totalData,
            'itemsPerPage' => 4
        ]);
    }
}
