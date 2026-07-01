<?php
$resources = glob('d:/ss/app/Filament/Resources/*/*Resource.php');
foreach ($resources as $path) {
    $content = file_get_contents($path);
    if (strpos($content, 'protected static ?string $navigationIcon') !== false) {
        $content = str_replace('protected static ?string $navigationIcon', 'protected static string|BackedEnum|null $navigationIcon', $content);
        file_put_contents($path, $content);
        echo 'Fixed: ' . $path . PHP_EOL;
    }
}
