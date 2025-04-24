<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Taggable;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella pivot dei tag del blog.
=======
/*
 * Class CreateBlogTaggableTable.
>>>>>>> 032086c (.)
 */
return new class extends XotBaseMigration {
    protected ?string $model_class = Taggable::class;

    /**
<<<<<<< HEAD
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->foreignId('tag_id')
                    ->constrained('blog_tags')
                    ->cascadeOnDelete();
                $table->morphs('taggable');
                $table->unique(['tag_id', 'taggable_id', 'taggable_type']);
                $table->timestamps();
=======
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                // $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
                $table->foreignId('tag_id'); // ->cascadeOnDelete();

                $table->morphs('taggable');
                // $table->unique(['tag_id', 'taggable_id', 'taggable_type']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('name')) {
                //    $table->string('name');
                // }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
>>>>>>> 032086c (.)
            }
        );
    }
};
