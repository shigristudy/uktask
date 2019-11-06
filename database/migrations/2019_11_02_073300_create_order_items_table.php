<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // this is the migration file of order items 
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string("whole_roast");
            $table->string("whole_roast_price");
            $table->string("whole_roast_price_qty");
            $table->string("pistachio_stollen")->nullable();
            $table->string("pistachio_stollen_qty")->nullable();
            $table->string("christmas_stollen")->nullable();
            $table->integer("christmas_stollen_qty")->nullable();
            $table->string("GingerbreadHouse")->nullable();
            $table->integer("gingerbreadHouse_qty")->nullable();
            $table->string("gingerbread_christmas_cookies")->nullable();
            $table->integer("gingerbread_christmas_cookies_qty")->nullable();
            $table->string("festive_french_macarons")->nullable();
            $table->integer("festive_french_macarons_qty")->nullable();
            $table->string("christmas_fruit_cake")->nullable();
            $table->integer("christmas_fruit_cake_qty")->nullable();
            $table->string("chocolate_tree")->nullable();
            $table->integer("chocolate_tree_qty")->nullable();
            $table->string("cinnamon_apple_strudel")->nullable();
            $table->integer("cinnamon_apple_strudel_qty")->nullable();
            $table->string("mini_panettone")->nullable();
            $table->integer("mini_panettone_qty")->nullable();
            $table->string("mini_panettone_amarena")->nullable();
            $table->integer("mini_panettone_amarena_qty")->nullable();
            $table->string("panettone_rose_water")->nullable();
            $table->integer("panettone_rose_water_qty")->nullable();
            $table->string("panettone_classic")->nullable();
            $table->integer("panettone_classic_qty")->nullable();
            $table->string("panettone_pandoro_classic")->nullable();
            $table->integer("panettone_pandoro_classic_qty")->nullable();
            $table->string("ChocolateBuche")->nullable();
            $table->integer("ChocolateBuche_qty")->nullable();
            $table->string("ClassicMadagascarVanilla")->nullable();
            $table->string("ClassicMadagascarVanilla_qty")->nullable();
            $table->string("RedVelvetCinnamon")->nullable();
            $table->string("RedVelvetCinnamon_qty")->nullable();
            $table->string("SaffranPistachio")->nullable();
            $table->integer("SaffranPistachio_qty")->nullable();
            $table->string("ChestnutMarronGlace")->nullable();
            $table->string("ChestnutMarronGlace_qty")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
