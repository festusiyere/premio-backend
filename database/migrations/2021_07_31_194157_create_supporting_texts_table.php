<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportingTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporting_texts', function (Blueprint $table) {
            $table->id();
            $table->string('content')->default('All text and element in this popup should be editable and draggable');
            $table->integer('top')->default(280);
            $table->integer('left')->default(88);
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
        Schema::dropIfExists('supporting_texts');
    }
}
