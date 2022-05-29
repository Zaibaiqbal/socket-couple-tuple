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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('city_live')->nullable();
            $table->string('live_family')->nullable();
            $table->string('material_status')->nullable();
            $table->string('diet')->nullable();
            $table->string('height')->nullable();
            $table->string('sub_community')->nullable();
            $table->string('high_education')->nullable();
            $table->string('work_with')->nullable();
            $table->string('designation')->nullable();
            $table->string('salary')->nullable();
            $table->string('current_company')->nullable();
            $table->string('college_name')->nullable();
            $table->string('bio')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('disability')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('father_status')->nullable();
            $table->string('mother_status')->nullable();
            $table->string('family_location')->nullable();
            $table->string('native_place')->nullable();
            $table->string('siblings')->nullable();
            $table->string('family_type')->nullable();
            $table->string('family_values')->nullable();
            $table->string('family_affluence')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
