<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('civil_id');
            $table->string('phone');

            $table->integer('connected_to_service');
            $table->string('service_type')->nullable();
            $table->string('province_id');
            $table->string('state_id');

            $table->text('attachment');
            $table->text('details');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suggestions');
    }
};
