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
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('word', 255)->unique();
            $table->longText('description')->nullable();
            $table->string('status');
            $table->text('default_photo')->nullable();
            $table->text('photo_1')->nullable();
            $table->text('photo_2')->nullable();

            $table->softDeletes();
            $table->longText('viewers')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
};
