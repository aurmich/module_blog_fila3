<?php
/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aebd4f2f (🔧 (ExportXlsStreamByLazyCollection.php): resolve conflict markers and remove duplicate entries in the file)

use function Safe\file;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 9f602e2 (up)
=======
>>>>>>> 6bebb798 (up)
use Spatie\QueueableAction\QueueableAction;
>>>>>>> ea98aa92 (🔧 (gitignore): remove duplicate entries and resolve conflict markers in .gitignore file)
>>>>>>> aebd4f2f (🔧 (ExportXlsStreamByLazyCollection.php): resolve conflict markers and remove duplicate entries in the file)
=======

use function Safe\file;
>>>>>>> 3ed0eb1f (🔧 (SqlService.php): fix nullable parameters in getCoalesceDateRange method to ensure proper functionality and avoid potential errors)

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

class GenerateFormByFileAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     */
    public function execute(File $file): int
    {
        if (! $file->isFile()) {
            return 0;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
            return 0;
        }

        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $file->getPathname());
        Assert::string($class_name = Str::replace('/', '\\', $class_name), '['.__LINE__.']['.__FILE__.']');
        $class_name = Str::substr($class_name, 0, -4);
        $model_name = app($class_name)->getModel();
        $fillable = app($model_name)->getFillable();
        Assert::classExists($class_name);
        $reflection_class = new \ReflectionClass($class_name);
        $form_method = $reflection_class->getMethod('form');

        $start_line = $form_method->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $form_method->getEndLine();
        $length = $end_line - $start_line;
        Assert::string($file_name = $form_method->getFileName(), '['.__LINE__.']['.__FILE__.']');
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        dd(
            [
                'class_name' => $class_name,
                'model_name' => $model_name,
                'fillable' => $fillable,
                // 't1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
                'methods' => get_class_methods(app($class_name)),
                'form_method' => $form_method,
                'form_method_methods' => get_class_methods($form_method),
                'body' => $body,
            ]
        );
    }

    public function ddFile(File $file): void
    {
        dd(
            [
                'getRelativePath' => $file->getRelativePath(), // =  ""
                'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
                'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
                // 'getContents' => $file->getContents(),
                'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
                'getFilename' => $file->getFilename(), // = AssenzeResource.php
                'getExtension' => $file->getExtension(), // php
                'getBasename' => $file->getBasename(), // AssenzeResource.php
                'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
                'isFile' => $file->isFile(), // true
                'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
                // 'getFileInfo' => $file->getFileInfo(),
                // 'getPathInfo' => $file->getPathInfo(),
                'methods' => get_class_methods($file),
            ]
        );
    }
}
