<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Category;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella delle categorie del blog.
=======
/*
 * Class CreateBlogCategoriesTable.
>>>>>>> 032086c (.)
 */
return new class extends XotBaseMigration {
    protected ?string $model_class = Category::class;

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
                $table->string('title');
<<<<<<< HEAD
                $table->string('slug')->unique();
                $table->text('description')->nullable();
                $table->text('icon')->nullable();
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->foreign('parent_id')
                    ->references('id')
                    ->on('blog_categories')
                    ->nullOnDelete();
                $table->integer('order')->default(0);
                $table->boolean('is_visible')->default(true);
                $table->timestamps();
                $table->softDeletes();
=======
                $table->string('slug');
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('description')) {
                    $table->text('description')->nullable();
                }
                // if (! $this->hasColumn('profile_photo_path')) {
                //    $table->string('profile_photo_path', 2048)->nullable();
                // }
                if (! $this->hasColumn('parent_id')) {
                    $table->unsignedBigInteger('parent_id')->nullable();
                }

                if (! $this->hasColumn('icon')) {
                    $table->text('icon')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
>>>>>>> 032086c (.)
            }
        );
    }
};
