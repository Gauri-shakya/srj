<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Register as BaseRegister;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\RenderHook;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\HtmlString;

class CustomRegister extends BaseRegister
{
    // Remove the subheading (the default top "Sign in" link)
    public function getSubheading(): string | Htmlable | null
    {
        return null;
    }

    // Add the "Sign in" link to the bottom using schema components
    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                RenderHook::make(PanelsRenderHook::AUTH_REGISTER_FORM_BEFORE),
                $this->getFormContentComponent(),
                RenderHook::make(PanelsRenderHook::AUTH_REGISTER_FORM_AFTER),
                \Filament\Schemas\Components\View::make('filament.pages.auth.custom-login-link'),
            ]);
    }

    public function register(): ?\Filament\Auth\Http\Responses\Contracts\RegistrationResponse
    {
        // Run the default registration logic (creates user and logs them in)
        parent::register();

        // Immediately log the user out
        \Filament\Facades\Filament::auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Return a custom response that redirects to the login page instead of the dashboard
        return new class implements \Filament\Auth\Http\Responses\Contracts\RegistrationResponse {
            public function toResponse($request)
            {
                return redirect()->to(filament()->getLoginUrl())->with('status', 'Registration successful! Please sign in.');
            }
        };
    }
}
