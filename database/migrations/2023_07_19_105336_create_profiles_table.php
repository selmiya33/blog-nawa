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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->unique()->constrained()->cascadeOnDelete();
            $table->foreignId("authore_id")->unique()->constrained()->cascadeOnDelete();
            $table->string("first_name",64);
            $table->string("last_name",64);
            $table->enum("gender",['male','female']);
            $table->date("birthday")->nullable();
            $table->string("city",128)->nullable();
            $table->string("Phone",20)->default('Non');
            $table->string("bio")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
