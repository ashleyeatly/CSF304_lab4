<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string(column: 'title')->nullable();
            $table->string(column: 'first_name');
            $table->string(column: 'surname');
            $table->text(column: 'address');
//            $table->date(column:'date_of_birth')->nullable();
//            $table->boolean(column: 'current');

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
        Schema::dropIfExists('people');
    }
};
