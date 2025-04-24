<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Tag;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella dei tag del blog.
=======
/*
 * Class CreateBlogTagsTable.
>>>>>>> 032086c (.)
 */
return new class extends XotBaseMigration {
    protected ?string $model_class = Tag::class;

    /**
<<<<<<< HEAD
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
=======
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
>>>>>>> 032086c (.)
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->json('name');
                $table->json('slug');
                $table->string('type')->nullable();
<<<<<<< HEAD
                $table->text('description')->nullable();
                $table->string('color')->nullable();
                $table->integer('order_column')->nullable();
                $table->boolean('is_visible')->default(true);
                $table->integer('articles_count')->default(0);
                $table->timestamps();
                $table->softDeletes();
=======
                $table->integer('order_column')->nullable();

                $table->timestamps();
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
