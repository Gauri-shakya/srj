<?php
$resources = glob('d:/ss/app/Filament/Resources/*/*/*.php');
$tableFiles = glob('d:/ss/app/Filament/Resources/*/Tables/*Table.php');

$backButtonStr = "
    protected function getHeaderActions(): array
    {
        \$actions = parent::getHeaderActions() ?? [];
        array_unshift(\$actions, \Filament\Actions\Action::make('back')
            ->label('Back to List')
            ->url(fn() => \$this->getResource()::getUrl('index'))
            ->color('gray')
            ->icon('heroicon-o-arrow-left'));
        return \$actions;
    }
";

foreach ($resources as $file) {
    $content = file_get_contents($file);
    $isPage = str_contains($content, 'extends CreateRecord') || str_contains($content, 'extends EditRecord') || str_contains($content, 'extends ViewRecord');
    
    if ($isPage && !str_contains($content, 'Action::make(\'back\')')) {
        // If it already has getHeaderActions, we need to modify it. For simplicity, just append if not exists.
        // But many have DeleteAction::make().
        if (str_contains($content, 'protected function getHeaderActions(): array')) {
            // It has it. Replace the array opening.
            $content = preg_replace('/(protected function getHeaderActions\(\): array\s*\{\s*return\s*\[)/s', "$1\n            \Filament\Actions\Action::make('back')->label('Back to List')->url(fn() => \$this->getResource()::getUrl('index'))->color('gray')->icon('heroicon-o-arrow-left'),", $content);
        } else {
            // It doesn't have it. Insert before last closing brace.
            $content = preg_replace('/}(?!.*})/', $backButtonStr . "}", $content);
        }
        file_put_contents($file, $content);
        echo "Added Back button to: $file\n";
    }
}

// Now handle table delete buttons to iconButton
$tableFiles = array_merge($tableFiles, glob('d:/ss/app/Filament/Resources/*Resource.php'));
foreach ($tableFiles as $file) {
    $content = file_get_contents($file);
    $modified = false;
    if (str_contains($content, 'DeleteAction::make()') && !str_contains($content, 'DeleteAction::make()->iconButton()')) {
        $content = str_replace('DeleteAction::make(),', 'DeleteAction::make()->iconButton(),', $content);
        $content = str_replace('DeleteAction::make()', 'DeleteAction::make()->iconButton()', $content);
        $modified = true;
    }
    if (str_contains($content, 'EditAction::make()') && !str_contains($content, 'EditAction::make()->iconButton()')) {
        $content = str_replace('EditAction::make(),', 'EditAction::make()->iconButton(),', $content);
        $content = str_replace('EditAction::make()', 'EditAction::make()->iconButton()', $content);
        $modified = true;
    }
    if ($modified) {
        file_put_contents($file, $content);
        echo "Made table actions iconButton in: $file\n";
    }
}
