<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newss', function (Blueprint $table) {
            $table->id();
            $table->string('main_p' , 255);
            $table->string('first_p' , 255)->nullable();
            $table->string('second_p' , 255)->nullable();
            $table->string('third_p' , 255)->nullable();
            $table->string('image');
            $table->string('label');
            $table->foreignId('news_cat_id')->constrained('news_cats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('admin_id')->nullable()->constrained('admins')->onUpdate('cascade')->nullOnDelete();
            $table->foreignId('super_admin_id')->nullable()->constrained('super_admins')->onUpdate('cascade')->nullOnDelete();

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
        Schema::dropIfExists('news');
    }
}
