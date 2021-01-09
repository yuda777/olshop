<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('categorie_name');
            $table->timestamps();
        });

        DB::table('categories')->insert(
            [
                ['categorie_name' => 'Atasan'],
                ['categorie_name' => 'Baju Anak'],
                ['categorie_name' => 'Tas'],
                ['categorie_name' => 'Topi'],
            ]
        );

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item_id');
            $table->string('item_name');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->decimal('new_price',9,3);
            $table->decimal('strikethrough_price',9,3);
            $table->boolean('sale');
            $table->string('photo_1');
            $table->string('photo_2');
            $table->string('photo_3');
            $table->string('photo_4');
            $table->string('photo_5');
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('items');
    }
}
