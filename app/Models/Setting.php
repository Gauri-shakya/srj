<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get($key, $default = '')
    {
        $setting = self::where('key', $key)->first();
        if ($setting) {
            return $setting->value;
        }
        
        $defaults = [
            'site_name' => 'SRJ Heat Exchangers',
            'phone' => '+91-9716115504',
            'email' => 'info@srj.co.in',
            'address' => 'A-1114, 11th Floor, I-Thum, A-40, Sector - 62, Noida - 201301',
            'whatsapp' => '919716115504',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'youtube' => '#',
        ];
        
        return $defaults[$key] ?? $default;
    }
}
