<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();
        
        if ($sliders->isEmpty()) {
            $sliders = collect([
                (object)[
                    'title' => 'Advanced Plate Heat Exchangers',
                    'subtitle' => 'We specialize in the manufacturing of plate heat exchangers and PHE systems engineered for industrial efficiency, durability, and performance.',
                    'image' => 'sliders/default.jpg',
                    'btn_text' => 'Get Quote Now',
                    'btn_link' => '/contact'
                ],
                (object)[
                    'title' => 'OEM Compatible Replacement Parts',
                    'subtitle' => 'High-quality gaskets and plates compatible with global brands ensuring reliable sealing and efficient heat transfer.',
                    'image' => 'sliders/default2.jpg',
                    'btn_text' => 'Explore Parts',
                    'btn_link' => '/replacement-parts'
                ]
            ]);
        }
        
        $services = collect([
            (object)['title' => 'Precision Engineering', 'short_description' => 'Custom-designed plate heat exchangers optimized for specific industrial thermal requirements.', 'icon' => 'fas fa-cogs'],
            (object)['title' => 'PHE Maintenance', 'short_description' => 'Professional inspection, cleaning, and repair services for maximum efficiency.', 'icon' => 'fas fa-tools'],
            (object)['title' => 'Replacement Parts', 'short_description' => 'Reliable gaskets and plates for major global heat exchanger brands.', 'icon' => 'fas fa-puzzle-piece'],
            (object)['title' => 'Installation Support', 'short_description' => 'Technical guidance on PHE installation, working principles, and drawings.', 'icon' => 'fas fa-hard-hat'],
        ]);
        
        $testimonials = \App\Models\Testimonial::where('is_active', true)->latest()->get();

        if ($testimonials->isEmpty()) {
            $testimonials = collect([
                (object)['name' => 'Deepak Tyagi', 'company' => 'HVAC Systems', 'rating' => 5, 'review' => 'Excellent thermal efficiency and durability. The SRJ team provided great technical support during installation.'],
                (object)['name' => 'Anil Jain', 'company' => 'Dairy Processing Plant', 'rating' => 5, 'review' => 'Best PHE manufacturers in India. Their replacement gaskets fit perfectly and stopped our leakage issues instantly.'],
            ]);
        }
        
        $certificates = \App\Models\AwardAndAchievement::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
            
        $homeFaqs = \App\Models\HomeFaq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
            
        $clients = \App\Models\Client::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        
        return view('frontend.home', compact('sliders', 'services', 'testimonials', 'certificates', 'homeFaqs', 'clients'));
    }
}
