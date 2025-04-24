<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella delle visualizzazioni degli articoli.
 */
return new class extends XotBaseMigration {
    /**
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
=======
/*
 * Class CreatePostViewsTable.
 */
return new class extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
>>>>>>> 032086c (.)
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->string('ip_address', 55);
                $table->string('user_agent', 255);
<<<<<<< HEAD
                $table->foreignId('post_id')
                    ->constrained('blog_articles')
                    ->cascadeOnDelete();
                $table->foreignId('user_id')
                    ->nullable()
                    ->constrained('users')
                    ->nullOnDelete();
                $table->string('session_id')->nullable();
                $table->json('metadata')->nullable();
                $table->timestamp('viewed_at');
                $table->timestamps();
                $table->softDeletes();
                
                $table->index(['post_id', 'ip_address', 'user_agent']);
                $table->index(['post_id', 'user_id']);
                $table->index('viewed_at');
=======
                $table->foreignId('post_id'); // ->references('id')->on('posts')->cascadeOnDelete();
                $table->foreignId('user_id'); // ->nullable()->references('id')->on('users')->cascadeOnDelete();
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('parent_id')) {
                //    $table->foreignId('parent_id')->nullable();
                // }
                // if (! $this->hasColumn('profile_photo_path')) {
                //    $table->string('profile_photo_path', 2048)->nullable();
                // }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
>>>>>>> 032086c (.)
            }
        );
    }
};
