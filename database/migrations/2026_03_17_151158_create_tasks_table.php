<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();

        // Lietotājs (automātiski no Laravel users tabulas)
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        // Uzdevuma dati
        $table->string('title');
        $table->text('description')->nullable();
        $table->date('due_date')->nullable();

        // Prioritāte
        $table->enum('priority', ['low', 'medium', 'high'])->default('medium');

        // Statuss
        $table->boolean('is_completed')->default(false);

        // Papildus (tev noderēs vēlāk)
        $table->boolean('is_favorite')->default(false);
        $table->string('tag')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
