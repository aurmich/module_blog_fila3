<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella pivot tra categorie e articoli.
 */
return new class extends XotBaseMigration {
    /**
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->foreignId('category_id')
                    ->constrained('blog_categories')
                    ->cascadeOnDelete();
                $table->foreignId('post_id')
                    ->constrained('blog_articles')
                    ->cascadeOnDelete();
                $table->integer('order')->default(0);
                $table->boolean('is_primary')->default(false);
                $table->timestamps();
                
                $table->unique(['category_id', 'post_id']);
                $table->index(['category_id', 'order']);
=======
/*
 * Class CreateLiveuserUsersTable.
 */
return new class extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->foreignId('category_id'); // ->references('id')->on('categories')->onDelete('cascade');
                $table->foreignId('post_id'); // ->references('id')->on('posts')->onDelete('cascade');
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('current_team_id')) {
                //    $table->foreignId('current_team_id')->nullable();
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
