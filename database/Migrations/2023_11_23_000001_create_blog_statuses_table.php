<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Status;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella degli stati del blog.
=======
/*
 * Class CreateBlogStatusesTable.
>>>>>>> 032086c (.)
 */
return new class extends XotBaseMigration {
    protected ?string $model_class = Status::class;

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
                $table->string('name');
<<<<<<< HEAD
                $table->string('color')->nullable();
                $table->text('reason')->nullable();
                $table->text('description')->nullable();
                $table->morphs('model');
                $table->json('metadata')->nullable();
                $table->timestamps();
                $table->softDeletes();
=======
                $table->text('reason')->nullable();
                $table->morphs('model');
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('name')) {
                    $table->string('name');
                }
                if (! $this->hasColumn('reason')) {
                    $table->string('reason')->nullable();
                }
                if (! $this->hasColumn('model_id')) {
                    $table->morphs('model');
                }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
>>>>>>> 032086c (.)
            }
        );
    }
};
