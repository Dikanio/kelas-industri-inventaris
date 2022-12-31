<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public function index(Request $request) {
        $assets = Asset::all();

        return view('application.homepage')->with([
            'assets' => $assets
        ]);
    }
}
