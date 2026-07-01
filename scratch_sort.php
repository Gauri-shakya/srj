<?php
$sorts = [
    'Sliders/SliderResource.php' => 1,
    'Products/ProductResource.php' => 2,
    'ProductCategories/ProductCategoryResource.php' => 3,
    'ReplacementBrands/ReplacementBrandResource.php' => 4,
    'Locations/LocationResource.php' => 5,
    'Blogs/BlogResource.php' => 6,
    'Settings/SettingResource.php' => 7,
];

foreach ($sorts as $path => $sort) {
    $fullPath = 'd:/ss/app/Filament/Resources/' . $path;
    if (file_exists($fullPath)) {
        $content = file_get_contents($fullPath);
        
        // Remove existing navigationSort if it exists
        $content = preg_replace('/protected static \?int \$navigationSort = \d+;/', '', $content);
        
        // Insert new navigationSort right after navigationIcon
        $replacement = "protected static ?int \$navigationSort = $sort;\n";
        $content = preg_replace('/(protected static string\|BackedEnum\|null \$navigationIcon = \'[^\']+\';)/', "$1\n    $replacement", $content);
        
        file_put_contents($fullPath, $content);
        echo 'Updated sort for: ' . $path . PHP_EOL;
    }
}
