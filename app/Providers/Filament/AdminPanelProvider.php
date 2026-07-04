<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->registration(\App\Filament\Pages\Auth\CustomRegister::class)
            ->darkMode(false)
            ->colors([
                'primary' => Color::Red, // Matches brand red
                'gray' => Color::Slate,
                'info' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->font('Poppins')
            ->sidebarCollapsibleOnDesktop()
            ->brandName('SRJ Admin Panel')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                // Custom widgets are auto-discovered from app/Filament/Widgets
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->renderHook(
                \Filament\View\PanelsRenderHook::HEAD_START,
                fn (): \Illuminate\Support\HtmlString => new \Illuminate\Support\HtmlString('
                    <style>
                        aside.fi-sidebar {
                            background-color: #f8fafc !important;
                            border-right: 1px solid #e2e8f0 !important;
                            box-shadow: 2px 0 10px rgba(0,0,0,0.02) !important;
                        }
                        .fi-sidebar-item-active > a {
                            background-color: white !important;
                            border-left: 4px solid #dc2626 !important;
                            border-radius: 0 8px 8px 0 !important;
                            box-shadow: 0 2px 5px rgba(0,0,0,0.03) !important;
                        }                        /* Simple & Clean Login Page */
                        .fi-simple-layout {
                            background-color: #f8fafc !important; /* Soft off-white background */
                            display: flex !important;
                            align-items: center !important;
                            justify-content: center !important;
                            min-height: 100vh !important;
                            padding: 1.5rem !important;
                        }
                        
                        .fi-simple-main-ctn {
                            background-color: #ffffff !important; /* Pure white card */
                            border-radius: 1rem !important;
                            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
                            width: 100% !important;
                            max-width: 550px !important; /* Increased width */
                            padding: 2rem !important; /* Reduced padding */
                            border: 1px solid #f1f5f9 !important;
                            margin: 0 auto !important;
                        }

                        /* Clean Logo */
                        .fi-simple-main-ctn .fi-logo {
                            font-size: 1.5rem !important; /* Slightly smaller logo */
                            color: #111827 !important;
                            font-weight: 800 !important;
                            justify-content: center !important;
                            margin-bottom: 1rem !important; /* Reduced margin */
                        }
                        
                        /* Hide the default "Sign in" sub-heading if it takes too much space */
                        .fi-simple-main-ctn h2.fi-header-heading {
                            font-size: 1.25rem !important;
                            margin-bottom: 0.5rem !important;
                        }

                        /* Fix default text colors */
                        .fi-simple-main-ctn h2,
                        .fi-simple-main-ctn p,
                        .fi-simple-main-ctn label span {
                            color: #374151 !important;
                        }

                        /* Input fields */
                        .fi-simple-main-ctn input {
                            border-radius: 0.5rem !important;
                            border: 1px solid #e2e8f0 !important;
                            padding: 0.6rem 1rem !important; /* Reduced padding */
                            background-color: #ffffff !important;
                            color: #111827 !important;
                            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
                        }
                        
                        .fi-simple-main-ctn input:focus {
                            border-color: #dc2626 !important;
                            box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.2) !important;
                            outline: none !important;
                        }

                        /* Standard Red Button */
                        .fi-simple-main-ctn button[type="submit"] {
                            border-radius: 0.5rem !important;
                            background-color: #dc2626 !important;
                            color: white !important;
                            font-weight: 600 !important;
                            font-size: 1rem !important;
                            padding: 0.75rem 1rem !important;
                            margin-top: 1rem !important;
                            border: none !important;
                            transition: background-color 0.2s;
                        }

                        .fi-simple-main-ctn button[type="submit"]:hover {
                            background-color: #b91c1c !important;
                        }
                        
                        /* Fix links */
                        .fi-simple-main-ctn a {
                            color: #dc2626 !important;
                        }
                        
                        .fi-simple-main-ctn a:hover {
                            color: #991b1b !important;
                        }
                    </style>
                ')
            );
    }
}
