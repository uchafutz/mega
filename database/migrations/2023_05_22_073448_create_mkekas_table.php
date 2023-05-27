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
        Schema::create('mkekas', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->float('total_olds')->nullable();
            $table->decimal("price")->nullable();
            $table->text("description")->nullable();
            $table->dateTime("expires_at")->nullable();
            $table->enum("was_succeful", ["true", "false"])->default("false");
            $table->enum("type", ["premier", "free", "subscription", "results"])->default("subscription");
            $table->string('featureImage')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mkekas');
    }
};
