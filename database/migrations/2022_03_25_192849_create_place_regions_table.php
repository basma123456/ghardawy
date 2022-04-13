<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_regions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained('places')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('region_id')->constrained('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('place_region' , 255);
            $table->string('address' , 600);
            $table->string('desc' , 600);
            $table->string('phone');
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
        Schema::dropIfExists('place_regions');
    }
}
