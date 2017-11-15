<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('location_types')) {
            Schema::create('location_types', function (Blueprint $table) {
                $table->primary([
                    'location_id',
                    'type_id'
                ]);
                $table->integer('location_id')
                      ->unsigned()
                      ->index();
                $table->foreign('location_id')
                      ->references('id')
                      ->on('locations')
                      ->onDelete('cascade');

                $table->integer('type_id')
                      ->unsigned()
                      ->index();
                $table->foreign('type_id')
                      ->references('id')
                      ->on('types')
                      ->onDelete('cascade');
    
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_types');
    }
}
