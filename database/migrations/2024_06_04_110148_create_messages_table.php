<?php

use Domain\Auth\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->text('message');

            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->boolean('is_user')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        if (app()->isLocal()) {
            Schema::dropIfExists('messages');
        }
    }
};
