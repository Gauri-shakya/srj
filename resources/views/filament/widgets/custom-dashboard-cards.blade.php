<x-filament-widgets::widget>
    <x-filament::section>
        <div class="custom-cards-grid">
            
            <!-- Products Card -->
            <a href="{{ url('/admin/products') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #3b82f6; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem; margin-top: 0;">Total Products</p>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $productsCount }}</p>
                </div>
                <div style="background: #eff6ff; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-cube style="width: 2rem; height: 2rem; color: #3b82f6;" />
                </div>
            </a>

            <!-- Leads Card -->
            <a href="{{ url('/admin/quotes') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #10b981; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                        <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin: 0;">All Leads</p>
                        <span style="background: #d1fae5; color: #047857; font-size: 0.7rem; font-weight: 700; padding: 0.1rem 0.4rem; border-radius: 9999px; animation: pulse 2s infinite;">NEW</span>
                    </div>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $leadsCount }}</p>
                </div>
                <div style="background: #d1fae5; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-users style="width: 2rem; height: 2rem; color: #10b981;" />
                </div>
            </a>

            <!-- Product Categories Card -->
            <a href="{{ url('/admin/product-categories') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #0d9488; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem; margin-top: 0;">Product Categories</p>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $categoriesCount }}</p>
                </div>
                <div style="background: #ccfbf1; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-rectangle-group style="width: 2rem; height: 2rem; color: #0d9488;" />
                </div>
            </a>

            <!-- Replacement Brands Card -->
            <a href="{{ url('/admin/replacement-brands') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #e11d48; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem; margin-top: 0;">Replacement Brands</p>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $brandsCount }}</p>
                </div>
                <div style="background: #ffe4e6; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-wrench-screwdriver style="width: 2rem; height: 2rem; color: #e11d48;" />
                </div>
            </a>

            <!-- Blogs Card -->
            <a href="{{ url('/admin/blogs') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #8b5cf6; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem; margin-top: 0;">Published Blogs</p>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $blogsCount }}</p>
                </div>
                <div style="background: #ede9fe; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-document-text style="width: 2rem; height: 2rem; color: #8b5cf6;" />
                </div>
            </a>

            <!-- Locations Card -->
            <a href="{{ url('/admin/locations') }}" style="background: white; border-radius: 0.75rem; padding: 1.5rem; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 24px rgba(149, 157, 165, 0.2); border-left: 5px solid #f97316; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 14px 28px rgba(149, 157, 165, 0.35)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(149, 157, 165, 0.2)';">
                <div>
                    <p style="color: #6b7280; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem; margin-top: 0;">Target Locations</p>
                    <p style="color: #111827; font-size: 2rem; font-weight: 700; margin: 0;">{{ $locationsCount }}</p>
                </div>
                <div style="background: #ffedd5; padding: 0.75rem; border-radius: 9999px;">
                    <x-heroicon-o-map-pin style="width: 2rem; height: 2rem; color: #f97316;" />
                </div>
            </a>

            <style>
                .custom-cards-grid {
                    display: grid;
                    gap: 1.5rem;
                    grid-template-columns: repeat(1, minmax(0, 1fr));
                }
                @media (min-width: 768px) {
                    .custom-cards-grid {
                        grid-template-columns: repeat(2, minmax(0, 1fr));
                    }
                }
                @media (min-width: 1024px) {
                    .custom-cards-grid {
                        grid-template-columns: repeat(3, minmax(0, 1fr));
                    }
                }

                @keyframes pulse {
                    0%, 100% { opacity: 1; }
                    50% { opacity: 0.5; }
                }
                .fi-section {
                    background: transparent !important;
                    box-shadow: none !important;
                    border: none !important;
                }
            </style>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
