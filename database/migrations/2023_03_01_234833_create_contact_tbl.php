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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('birthday');
            $table->string('identification');
            $table->string('status');
            $table->string('career');
            $table->string('address');
            $table->string('road');
            $table->string('province');
            $table->string('amphoe');
            $table->string('tambon');
            $table->string('input_zipcode');
            $table->string('coverstartdate');
            $table->string('brand');
            $table->string('carmodel');
            $table->string('caryear');
            $table->string('registrationnumber');
            $table->string('registrationprovince');
            $table->string('chassisnumber');
            $table->string('carpaint');
            $table->string('amount')->nullable();
            $table->string('insurance')->nullable();
            $table->string('plane')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
