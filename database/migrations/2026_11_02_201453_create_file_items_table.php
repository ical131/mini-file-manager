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
        Schema::create('file_items', function (Blueprint $table) {
            $table->id();

            // Folder relationship
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('file_items')
                ->restrictOnDelete();

            // Item information
            $table->string('name');
            $table->enum('type', ['folder', 'file']);

            // File metadata
            $table->string('original_name')->nullable();
            $table->string('disk')->nullable();
            $table->string('path')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('extension', 20)->nullable();
            $table->unsignedBigInteger('size')->default(0);

            // File integrity
            $table->string('checksum', 64)->nullable();

            // Soft delete
            $table->softDeletes();

            // Timestamps
            $table->timestamps();

            $table->index('parent_id');
            $table->index('type');
            $table->index('checksum');
                    });
                }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_items');
    }
};
