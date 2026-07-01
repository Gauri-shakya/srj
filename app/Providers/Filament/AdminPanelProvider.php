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
                        }
                        
                        /* Exact Match Floating Card Login UI */
                        .fi-simple-layout {
                            background: #e2e8f0 !important; /* Soft Slate background */
                            display: flex !important;
                            align-items: center !important;
                            justify-content: center !important;
                            min-height: 100vh !important;
                            padding: 1rem !important;
                            max-width: 100% !important;
                            margin: 0 !important;
                        }
                        
                        /* The Floating Card */
                        .fi-simple-main {
                            display: flex !important;
                            flex-direction: row !important;
                            background: white !important;
                            border-radius: 1.5rem !important;
                            overflow: hidden !important;
                            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
                            width: 100% !important;
                            max-width: 1000px !important;
                            min-height: 600px !important;
                            padding: 0 !important;
                        }
                        
                        /* Left Section (Abstract Graphics & Text) - Desktop Only */
                        .fi-simple-main::before {
                            content: "";
                            display: none;
                        }
                        
                        @media (min-width: 1024px) {
                            .fi-simple-main::before {
                                display: block;
                                flex: 1.1;
                                background-color: #dc2626;
                                /* Beautiful gradient + the exact SVG mockup you provided */
                                background-image: 
                                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 450 600\'%3E%3Cpath d=\'M-50 100 C 100 -50, 200 200, 400 50\' stroke=\'rgba(255,255,255,0.2)\' stroke-width=\'2\' fill=\'none\'/%3E%3Cpath d=\'M-50 120 C 100 -30, 200 220, 400 70\' stroke=\'rgba(255,255,255,0.1)\' stroke-width=\'2\' fill=\'none\'/%3E%3Cpath d=\'M100 600 C 50 400, 350 400, 200 200\' stroke=\'rgba(255,255,255,0.2)\' stroke-width=\'2\' fill=\'none\'/%3E%3Cpath d=\'M120 600 C 70 420, 370 420, 220 220\' stroke=\'rgba(255,255,255,0.1)\' stroke-width=\'2\' fill=\'none\'/%3E%3Cpath d=\'M 100 100 L 100 120 M 90 110 L 110 110\' stroke=\'rgba(255,255,255,0.5)\' stroke-width=\'2\'/%3E%3Cpath d=\'M 150 400 L 150 420 M 140 410 L 160 410\' stroke=\'rgba(255,255,255,0.5)\' stroke-width=\'2\'/%3E%3Ccircle cx=\'180\' cy=\'160\' r=\'6\' stroke=\'rgba(255,255,255,0.5)\' stroke-width=\'2\' fill=\'none\'/%3E%3Ccircle cx=\'60\' cy=\'480\' r=\'6\' stroke=\'rgba(255,255,255,0.5)\' stroke-width=\'2\' fill=\'none\'/%3E%3Cg fill=\'rgba(255,255,255,0.5)\'%3E%3Ccircle cx=\'380\' cy=\'100\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'100\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'100\' r=\'2\'/%3E%3Ccircle cx=\'380\' cy=\'115\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'115\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'115\' r=\'2\'/%3E%3Ccircle cx=\'380\' cy=\'130\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'130\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'130\' r=\'2\'/%3E%3Ccircle cx=\'380\' cy=\'145\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'145\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'145\' r=\'2\'/%3E%3Ccircle cx=\'380\' cy=\'160\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'160\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'160\' r=\'2\'/%3E%3Ccircle cx=\'380\' cy=\'175\' r=\'2\'/%3E%3Ccircle cx=\'390\' cy=\'175\' r=\'2\'/%3E%3Ccircle cx=\'400\' cy=\'175\' r=\'2\'/%3E%3C/g%3E%3Ctext x=\'50\' y=\'280\' font-family=\'sans-serif\' font-size=\'42\' font-weight=\'800\' fill=\'white\'%3EWelcome back!%3C/text%3E%3Ctext x=\'50\' y=\'325\' font-family=\'sans-serif\' font-size=\'18\' font-weight=\'400\' fill=\'rgba(255,255,255,0.9)\'%3EYou can sign in to access with your%3C/text%3E%3Ctext x=\'50\' y=\'350\' font-family=\'sans-serif\' font-size=\'18\' font-weight=\'400\' fill=\'rgba(255,255,255,0.9)\'%3Eexisting account.%3C/text%3E%3C/svg%3E"),
                                    linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                            }
                        }

                        /* Right Form Section */
                        .fi-simple-main-ctn {
                            flex: 1 !important;
                            padding: 3rem !important;
                            background: white !important;
                            box-shadow: none !important;
                            border: none !important;
                            display: flex !important;
                            flex-direction: column !important;
                            justify-content: center !important;
                        }

                        /* Form Headings */
                        .fi-simple-main-ctn .fi-logo {
                            font-size: 2.25rem !important;
                            color: #4b5563 !important;
                            font-weight: 800 !important;
                            margin-bottom: 2rem !important;
                            justify-content: flex-start !important;
                        }
                        
                        .fi-simple-main-ctn h2 {
                            display: none !important; /* Hide default "Sign in to your account" text if present */
                        }

                        /* Pill-shaped Inputs */
                        .fi-simple-main-ctn .fi-input-wrapper {
                            border-radius: 9999px !important;
                            overflow: hidden !important;
                            background-color: white !important;
                        }
                        
                        .fi-simple-main-ctn input {
                            border-radius: 9999px !important;
                            padding: 0.85rem 1.5rem !important;
                            background-color: white !important;
                        }

                        /* Pill-shaped Button */
                        .fi-simple-main-ctn button[type="submit"] {
                            border-radius: 9999px !important;
                            background-color: #dc2626 !important;
                            padding-top: 0.85rem !important;
                            padding-bottom: 0.85rem !important;
                            font-size: 1.1rem !important;
                            font-weight: 600 !important;
                            margin-top: 1rem !important;
                            transition: background-color 0.3s;
                        }
                        
                        .fi-simple-main-ctn button[type="submit"]:hover {
                            background-color: #b91c1c !important;
                        }
                    </style>
                ')
            );
    }
}
