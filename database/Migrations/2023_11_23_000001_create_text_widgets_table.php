<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella dei widget testuali.
 */
return new class extends XotBaseMigration {
    /**
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
=======
/*
 * Class CreateTextWidgetsTable.
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
                $table->string('key')->unique();
<<<<<<< HEAD
                $table->string('title', 2048)->nullable();
                $table->longText('content')->nullable();
                $table->string('image', 2048)->nullable();
                $table->string('position')->nullable();
                $table->integer('order')->default(0);
                $table->json('data')->nullable();
                $table->boolean('active')->default(true);
                $table->timestamps();
                $table->softDeletes();
=======
                $table->string('image', 2048)->nullable();
                $table->string('title', 2048)->nullable();
                $table->longText('content')->nullable();
                $table->boolean('active');
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
