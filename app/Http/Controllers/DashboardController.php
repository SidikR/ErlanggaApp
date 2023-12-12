<?php

namespace App\Http\Controllers;

use App\Models\GaleryModel;
use App\Models\ProductModel;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cards = [
            [
                'id' => 1,
                'name' => 'Products',
                'count' => ProductModel::all()->count(),
                'ico' => 'dsfa',
                'route' => 'products.index'
            ],
            [
                'id' => 2,
                'name' => 'Gallery',
                'count' => GaleryModel::all()->count(),
                'ico' => 'dsfa',
                'route' => 'galery.index'
            ]
        ];

        return view('admin/pages/dashboard', ['cards' => $cards]);
    }
}
