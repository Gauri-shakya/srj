<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Product;
use Illuminate\Http\Request;

class SeoLocationController extends Controller
{
    public function show($productSlug, $locationSlug)
    {
        // Find the location
        $location = Location::where('slug', $locationSlug)->where('is_active', true)->firstOrFail();
        
        // Find the product and verify it belongs to this location
        $product = Product::where('slug', $productSlug)
            ->where('is_active', true)
            ->whereHas('locations', function ($query) use ($location) {
                $query->where('locations.id', $location->id);
            })
            ->firstOrFail();

        // Dynamically override product name and meta tags for the location
        $dynamicTitle = $product->name . " Manufacturers in " . $location->name;
        
        // You can return a specific SEO view, or reuse the product view with dynamic variables
        return view('frontend.products.seo_show', compact('product', 'location', 'dynamicTitle'));
    }
}
