<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->text('issue');
            $table->string('phone_number', 20); // Store full phone number including country code
            $table->string('country_code', 5); // Add this line to store the country code
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
