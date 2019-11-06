<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        "whole_roast",
        "whole_roast_price",
        "whole_roast_price_qty",
        "pistachio_stollen",
        "pistachio_stollen_qty",
        "christmas_stollen",
        "christmas_stollen_qty",
        "GingerbreadHouse",
        "gingerbreadHouse_qty",
        "gingerbread_christmas_cookies",
        "gingerbread_christmas_cookies_qty",
        "festive_french_macarons",
        "festive_french_macarons_qty",
        "christmas_fruit_cake",
        "christmas_fruit_cake_qty",
        "chocolate_tree",
        "chocolate_tree_qty",
        "cinnamon_apple_strudel",
        "cinnamon_apple_strudel_qty",
        "mini_panettone",
        "mini_panettone_qty",
        "mini_panettone_amarena",
        "mini_panettone_amarena_qty",
        "panettone_rose_water", 
        "panettone_rose_water_qty",
        "panettone_classic", 
        "panettone_classic_qty", 
        "panettone_pandoro_classic",
        "panettone_pandoro_classic_qty",
        "ChocolateBuche",
        "ChocolateBuche_qty",
        "ClassicMadagascarVanilla",
        "ClassicMadagascarVanilla_qty",
        "RedVelvetCinnamon",
        "RedVelvetCinnamon_qty",
        "SaffranPistachio",
        "SaffranPistachio_qty",
        "ChestnutMarronGlace",
        "ChestnutMarronGlace_qty"
    ];
}
