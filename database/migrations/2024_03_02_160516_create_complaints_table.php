<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('civil_id');
            $table->string('phone');

            $table->string('cr_number');
            $table->string('service_type');
            $table->string('province_id');
            $table->string('state_id');

            $table->string('submission_type');
            $table->string('attachment');
            $table->string('details');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
