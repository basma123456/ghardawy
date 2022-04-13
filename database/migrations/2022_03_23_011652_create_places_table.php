<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 255);
            $table->string('address' , 255);
            $table->string('email' , 255)->nullable();
            $table->string('phone' , 255);
            $table->string('desc' , 800);
            $table->tinyInteger('status')->default(0);
            $table->integer('likes')->nullable();
            $table->integer('unlikes')->nullable();
            $table->json('image');
            $table->json('menu');
            $table->foreignId('seller_id')->constrained('sellers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('places');
    }
}
