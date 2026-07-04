<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('replacement_brands')) {
            Schema::table('replacement_brands', function (Blueprint $table) {
                if (!Schema::hasColumn('replacement_brands', 'alt_text')) {
                    $table->string('alt_text')->nullable()->after('image');
                }
            });
        }

        if (Schema::hasTable('srj_heat_exchanger_sections')) {
            Schema::table('srj_heat_exchanger_sections', function (Blueprint $table) {
                if (!Schema::hasColumn('srj_heat_exchanger_sections', 'alt_text')) {
                    $table->string('alt_text')->nullable()->after('image');
                }
            });
        }

        if (Schema::hasTable('blogs')) {
            Schema::table('blogs', function (Blueprint $table) {
                if (!Schema::hasColumn('blogs', 'alt_text')) {
                    $table->string('alt_text')->nullable()->after('image');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('replacement_brands')) {
            Schema::table('replacement_brands', function (Blueprint $table) {
                $table->dropColumn('alt_text');
            });
        }

        if (Schema::hasTable('srj_heat_exchanger_sections')) {
            Schema::table('srj_heat_exchanger_sections', function (Blueprint $table) {
                $table->dropColumn('alt_text');
            });
        }

        if (Schema::hasTable('blogs')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('alt_text');
            });
        }
    }
};
