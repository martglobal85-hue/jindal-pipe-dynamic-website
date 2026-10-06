<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('approaches', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('visiontitle');
            $table->text('visiontext')->nullable();
            $table->string('visionimage')->nullable();
            $table->string('missiontitle');
            $table->text('missiontext')->nullable();
            $table->string('missionimage')->nullable();
            $table->string('ourcompanytitle');
            $table->text('ourcompanytext')->nullable();
            $table->string('ourcompanyimage')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('approaches');
    }
};
