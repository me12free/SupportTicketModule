<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('supports', function (Blueprint $table) {
        $table->string('country_code', 5)->after('phone_number'); // Adjust the position as needed
    });
}

public function down()
{
    Schema::table('supports', function (Blueprint $table) {
        $table->dropColumn('country_code');
    });
}

};