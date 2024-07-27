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
    Schema::create('revenues', function (Blueprint $table) {
        $table->id();
        $table->decimal('amount', 10, 2);
        $table->string('description');
        $table->date('revenue_date');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('revenues');
}

};
