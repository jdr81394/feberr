<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RobertItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("robert_items", function (Blueprint $table) {
            $table->id();
            // Blueprint class doesnt have the id method.. must manually add this through db GUI in future. Jake
            $table->string("name");
            $table->string("description");
            $table->float("price", 8, 2);
            $table->integer("media_type");
            $table->integer("geometry");
            $table->integer("polygons")->unsigned();
            $table->integer("vertices")->unsigned();
            $table->boolean("textures");
            $table->boolean("materials");
            $table->boolean("rigged");
            $table->boolean("animated");
            $table->boolean("uvs_Mapped");
            $table->integer("unwrapped_uvs");
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
        //
        Schema::drop("robert_items");
    }
}
