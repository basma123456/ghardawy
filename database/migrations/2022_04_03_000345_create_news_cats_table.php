<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_cats', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 255)->required();
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
        Schema::dropIfExists('news_cats');
    }
}
