<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SrjHeatExchangerSection;

class SrjHeatExchangersController extends Controller
{
    public function index()
    {
        $sections = SrjHeatExchangerSection::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
            
        return view('frontend.srj-heat-exchangers', compact('sections'));
    }
}
