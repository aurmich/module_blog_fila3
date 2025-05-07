<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\Article;

use Modules\Blog\Models\Article;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Actions\GetModelClassByModelTypeAction;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
=======
<<<<<<< HEAD
=======
use Spatie\QueueableAction\QueueableAction;
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
use Webmozart\Assert\Assert;

/**
 * Classe per la traduzione dei contenuti degli articoli.
 * Gestisce la traduzione di content_blocks, sidebar_blocks e footer_blocks.
 */
class TranslateContentAction
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> bb321e5 (.)
    use QueueableAction;

    /**
     * Esegue la traduzione dei contenuti di un articolo.
     *
     * @param string $model_class La classe del modello
     * @param string $article_id ID dell'articolo
     * @param list<string> $locales Lista delle lingue da tradurre
     * @param array<string,mixed> $data Dati aggiuntivi per la traduzione
     * @param class-string $class Classe del modello
     * @return void
     */
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
    public function execute(string $model_class, string $article_id, array $locales, array $data, string $class): void
    {
        Assert::isInstanceOf($model = app(GetModelByModelTypeAction::class)->execute($model_class, $article_id), app($class), '['.__LINE__.']['.__FILE__.']');
<<<<<<< HEAD
        /** @var Article $model */
=======
<<<<<<< HEAD
=======
        /** @var Article $model */
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)

        Assert::isArray($model_contents = $model->toArray(), '['.__LINE__.']['.__FILE__.']');

        if ($data['content_blocks']) {
            $model_content = $model_contents['content_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
                    $model_content[$locale] = $model_content['it'];
                }
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
            // @phpstan-ignore-next-line
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
            $model->content_blocks = $model_content;
        }

        if ($data['sidebar_blocks']) {
            $model_content = $model_contents['sidebar_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
                    $model_content[$locale] = $model_content['it'];
                }
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
            // @phpstan-ignore-next-line
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
            $model->sidebar_blocks = $model_content;
        }

        if ($data['footer_blocks']) {
            $model_content = $model_contents['footer_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
                    $model_content[$locale] = $model_content['it'];
                }
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
            // @phpstan-ignore-next-line
=======
>>>>>>> origin/dev
>>>>>>> bb321e5 (.)
            $model->footer_blocks = $model_content;
        }

        $model->update();
    }
}
