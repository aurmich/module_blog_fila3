<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella dei banner.
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
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->string('link')->nullable();
                $table->string('action_text')->nullable();
                
                // Immagini
                $table->string('desktop_thumbnail')->nullable();
                $table->string('mobile_thumbnail')->nullable();
                $table->string('desktop_thumbnail_webp')->nullable();
                $table->string('mobile_thumbnail_webp')->nullable();
                
                // Relazioni
                $table->foreignId('category_id')
                    ->nullable()
                    ->constrained('blog_categories')
                    ->nullOnDelete();
                
                // Date
                $table->timestamp('start_date')->nullable();
                $table->timestamp('end_date')->nullable();
                
                // Flags e contatori
                $table->boolean('hot_topic')->default(false);
                $table->boolean('landing_banner')->default(false);
                $table->boolean('is_active')->default(true);
                $table->integer('open_markets_count')->nullable();
                $table->integer('position')->default(0);
                $table->integer('views_count')->default(0);
                $table->integer('clicks_count')->default(0);
                
                // Metadati
                $table->json('metadata')->nullable();
                
                $table->timestamps();
                $table->softDeletes();
                
                // Indici
                $table->index('position');
                $table->index(['start_date', 'end_date']);
=======
/*
 * Class .
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
                /*
                'desktop_thumbnail' => 'string',
                'mobile_thumbnail' => 'string',
                'desktop_thumbnail_webp' => 'string',
                'mobile_thumbnail_webp' => 'string',
                */
                $table->string('link')->nullable();
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->string('action_text')->nullable();
                $table->string('category_id', 36)->index()->nullable();
                $table->datetime('start_date')->nullable();
                $table->datetime('end_date')->nullable();
                $table->boolean('hot_topic')->default(false);
                $table->integer('open_markets_count')->nullable();
                $table->boolean('landing_banner')->default(false);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);

                if (! $this->hasColumn('pos')) {
                    $table->integer('pos')->nullable();
                }
>>>>>>> 032086c (.)
            }
        );
    }
};
