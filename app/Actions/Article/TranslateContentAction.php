<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\Article;

use Modules\Blog\Models\Article;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Actions\GetModelClassByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class TranslateContentAction
{
    use QueueableAction;

    /**
     * Esegue la traduzione dei contenuti di un articolo.
     *
     * @param string $model_class
     * @param string $article_id
     * @param list<string> $locales
     * @param array<string,mixed> $data
     * @param class-string $class
     * @return void
     */
    public function execute(string $model_class, string $article_id, array $locales, array $data, string $class): void
    {
        // dddx([app(GetModelClassByModelTypeAction::class)->execute($model_class), Article::class]);
        // dddx(app($class));
<<<<<<< HEAD
        Assert::isInstanceOf($model = app(GetModelByModelTypeAction::class)->execute($model_class, $article_id), app($class), '['.__LINE__.']['.__FILE__.']');
        /** @var Article $model */

        Assert::isArray($model_contents = $model->toArray(), '['.__LINE__.']['.__FILE__.']');

        if ($data['content_blocks']) {
=======
        $model = app(GetModelByModelTypeAction::class)->execute($model_class, $article_id);
        Assert::isInstanceOf($model, $class, '['.__LINE__.']['.__FILE__.']');
        /** @var Article $model */

        /** @var array $model_contents */
        $model_contents = $model->toArray();
        Assert::isArray($model_contents, '['.__LINE__.']['.__FILE__.']');

        if ($data['content_blocks'] ?? false) {
            /** @var array $model_content */
>>>>>>> b1b8a66 (.)
            $model_content = $model_contents['content_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
<<<<<<< HEAD
                    $model_content[$locale] = $model_content['it'];
                }
            }
            $model->content_blocks = $model_content;
        }

        if ($data['sidebar_blocks']) {
=======
                    $model_content[$locale] = $model_content['it'] ?? '';
                }
            }
            $model->content_blocks = json_encode($model_content, JSON_THROW_ON_ERROR);
        }

        if ($data['sidebar_blocks'] ?? false) {
            /** @var array $model_content */
>>>>>>> b1b8a66 (.)
            $model_content = $model_contents['sidebar_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
<<<<<<< HEAD
                    $model_content[$locale] = $model_content['it'];
=======
                    $model_content[$locale] = $model_content['it'] ?? [];
>>>>>>> b1b8a66 (.)
                }
            }
            $model->sidebar_blocks = $model_content;
        }

<<<<<<< HEAD
        if ($data['footer_blocks']) {
=======
        if ($data['footer_blocks'] ?? false) {
            /** @var array $model_content */
>>>>>>> b1b8a66 (.)
            $model_content = $model_contents['footer_blocks'];

            // per ora do per scontato che la traduzione italiana esista
            foreach ($locales as $locale) {
                if (! isset($model_content[$locale])) {
<<<<<<< HEAD
                    $model_content[$locale] = $model_content['it'];
=======
                    $model_content[$locale] = $model_content['it'] ?? [];
>>>>>>> b1b8a66 (.)
                }
            }
            $model->footer_blocks = $model_content;
        }

        $model->update();
    }
}
