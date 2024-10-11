<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name', 255);
            $table->string('location', 255);
            $table->decimal('rating', 10, 2);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Dòng này cho phép soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
