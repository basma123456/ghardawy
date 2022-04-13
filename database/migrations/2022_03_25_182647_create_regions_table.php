<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('government', 255);
            $table->string('city', 255)->nullable();
            $table->string('district', 255)->nullable();
            $table->string('desc', 800);
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
        Schema::dropIfExists('regions');
    }
}

