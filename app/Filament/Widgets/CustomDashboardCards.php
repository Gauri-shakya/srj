<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class CustomDashboardCards extends Widget
{
    protected string $view = 'filament.widgets.custom-dashboard-cards';

    protected int | string | array $columnSpan = 'full';

    protected function getViewData(): array
    {
        return [
            'productsCount' => \App\Models\Product::count(),
            'leadsCount' => \App\Models\Quote::count(),
            'blogsCount' => \App\Models\Blog::count(),
            'locationsCount' => \App\Models\Location::count(),
            'categoriesCount' => \App\Models\ProductCategory::count(),
            'brandsCount' => \App\Models\ReplacementBrand::count(),
        ];
    }
}
