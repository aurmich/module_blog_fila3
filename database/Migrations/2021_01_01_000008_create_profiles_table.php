<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Blog\Models\Profile;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
/**
 * Migrazione per la creazione della tabella dei profili utente.
=======
/*
 * Class CreateProfilesTable.
>>>>>>> 032086c (.)
 */
return new class extends XotBaseMigration {
    protected ?string $model_class = Profile::class;

    /**
<<<<<<< HEAD
     * Esegue la migrazione del database.
     */
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->foreignId('user_id')
                    ->nullable()
                    ->constrained('users')
                    ->nullOnDelete();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('slug')->nullable()->unique();
                $table->text('bio')->nullable();
                $table->string('website')->nullable();
                $table->string('twitter')->nullable();
                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('youtube')->nullable();
                $table->string('github')->nullable();
                $table->string('avatar')->nullable();
                $table->string('cover_image')->nullable();
                $table->decimal('credits', 10, 2)->default(0);
                $table->boolean('is_verified')->default(false);
                $table->timestamp('last_login_at')->nullable();
                $table->schemalessAttributes('extra');
                $table->timestamps();
                $table->softDeletes();
                
                $table->index(['first_name', 'last_name']);
                $table->index('email');
                $table->index('credits');
=======
     * db up.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->integer('user_id')->nullable()->index();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                /*
                if ($this->hasColumn('auth_user_id')) {
                    $table->dropColumn('user_id');
                    $table->renameColumn('auth_user_id', 'user_id');
                }
                */
                if ($this->hasColumn('user_id')) {
                    $table->string('user_id')->change();
                }

                if (! $this->hasColumn('credits')) {
                    $table->decimal('credits')->default(0);
                }

                if (! $this->hasColumn('slug')) {
                    $table->string('slug')->nullable();
                }

                if (! $this->hasColumn('extra')) {
                    $table->schemalessAttributes('extra');
                }

                if ($this->hasColumn('credits')) {
                    $table->decimal('credits')->change();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
>>>>>>> 032086c (.)
            }
        );
    }
};
