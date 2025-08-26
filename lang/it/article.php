<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Articoli',
        'plural_label' => 'Articoli',
        'navigation_group' => 'Blog',
        'navigation_icon' => 'heroicon-o-document-text',
        'navigation_sort' => 1,
        'description' => 'Gestione completa degli articoli del blog',
    ],

    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco dell\'articolo',
        ],
        'title' => [
            'label' => 'Titolo',
            'tooltip' => 'Titolo dell\'articolo',
            'placeholder' => 'Inserisci il titolo dell\'articolo',
            'help' => 'Il titolo deve essere descrittivo e accattivante',
        ],
        'slug' => [
            'label' => 'Slug',
            'tooltip' => 'URL-friendly identifier',
            'placeholder' => 'titolo-articolo',
            'help' => 'Lo slug viene generato automaticamente dal titolo',
        ],
        'content' => [
            'label' => 'Contenuto',
            'tooltip' => 'Contenuto principale dell\'articolo',
            'placeholder' => 'Scrivi il contenuto dell\'articolo...',
            'help' => 'Utilizza l\'editor rich text per formattare il contenuto',
        ],
        'excerpt' => [
            'label' => 'Estratto',
            'tooltip' => 'Breve descrizione dell\'articolo',
            'placeholder' => 'Scrivi un breve riassunto...',
            'help' => 'L\'estratto viene mostrato nelle anteprime e nei meta tag',
        ],
        'featured_image' => [
            'label' => 'Immagine in evidenza',
            'tooltip' => 'Immagine principale dell\'articolo',
            'placeholder' => 'Seleziona un\'immagine',
            'help' => 'L\'immagine in evidenza viene mostrata nelle anteprime',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Stato di pubblicazione dell\'articolo',
            'placeholder' => 'Seleziona lo stato',
            'help' => 'Gli articoli possono essere bozza, in revisione o pubblicati',
            'options' => [
                'draft' => 'Bozza',
                'review' => 'In revisione',
                'published' => 'Pubblicato',
                'archived' => 'Archiviato',
            ],
        ],
        'published_at' => [
            'label' => 'Data di pubblicazione',
            'tooltip' => 'Data in cui l\'articolo diventa visibile',
            'placeholder' => 'Seleziona la data di pubblicazione',
            'help' => 'L\'articolo diventerà visibile ai lettori a partire da questa data',
        ],
        'author_id' => [
            'label' => 'Autore',
            'tooltip' => 'Autore dell\'articolo',
            'placeholder' => 'Seleziona l\'autore',
            'help' => 'L\'autore è responsabile del contenuto dell\'articolo',
        ],
        'category_id' => [
            'label' => 'Categoria',
            'tooltip' => 'Categoria dell\'articolo',
            'placeholder' => 'Seleziona la categoria',
            'help' => 'La categoria aiuta a organizzare e classificare gli articoli',
        ],
        'tags' => [
            'label' => 'Tag',
            'tooltip' => 'Tag per categorizzare l\'articolo',
            'placeholder' => 'Aggiungi tag separati da virgole',
            'help' => 'I tag aiutano i lettori a trovare articoli correlati',
        ],
        'meta_title' => [
            'label' => 'Meta Title',
            'tooltip' => 'Titolo per i motori di ricerca',
            'placeholder' => 'Inserisci il meta title',
            'help' => 'Il meta title viene mostrato nei risultati di ricerca',
        ],
        'meta_description' => [
            'label' => 'Meta Description',
            'tooltip' => 'Descrizione per i motori di ricerca',
            'placeholder' => 'Inserisci la meta description',
            'help' => 'La meta description viene mostrata nei risultati di ricerca',
        ],
        'is_featured' => [
            'label' => 'In evidenza',
            'tooltip' => 'Articolo in evidenza',
            'help' => 'Gli articoli in evidenza vengono mostrati in posizioni privilegiate',
        ],
        'allow_comments' => [
            'label' => 'Consenti commenti',
            'tooltip' => 'Abilita i commenti per questo articolo',
            'help' => 'I commenti permettono ai lettori di interagire con l\'articolo',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Nuovo articolo',
            'tooltip' => 'Crea un nuovo articolo',
            'success' => 'Articolo creato con successo',
            'error' => 'Errore durante la creazione dell\'articolo',
        ],
        'edit' => [
            'label' => 'Modifica articolo',
            'tooltip' => 'Modifica l\'articolo selezionato',
            'success' => 'Articolo aggiornato con successo',
            'error' => 'Errore durante l\'aggiornamento dell\'articolo',
        ],
        'delete' => [
            'label' => 'Elimina articolo',
            'tooltip' => 'Elimina l\'articolo selezionato',
            'success' => 'Articolo eliminato con successo',
            'error' => 'Errore durante l\'eliminazione dell\'articolo',
            'confirmation' => 'Sei sicuro di voler eliminare questo articolo? Questa azione è irreversibile.',
        ],
        'publish' => [
            'label' => 'Pubblica articolo',
            'tooltip' => 'Pubblica l\'articolo immediatamente',
            'success' => 'Articolo pubblicato con successo',
            'error' => 'Errore durante la pubblicazione dell\'articolo',
        ],
        'unpublish' => [
            'label' => 'Rimuovi dalla pubblicazione',
            'tooltip' => 'Rimuovi l\'articolo dalla pubblicazione',
            'success' => 'Articolo rimosso dalla pubblicazione',
            'error' => 'Errore durante la rimozione dalla pubblicazione',
        ],
        'duplicate' => [
            'label' => 'Duplica articolo',
            'tooltip' => 'Crea una copia dell\'articolo',
            'success' => 'Articolo duplicato con successo',
            'error' => 'Errore durante la duplicazione dell\'articolo',
        ],
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza l\'anteprima dell\'articolo',
        ],
    ],

    'validation' => [
        'title' => [
            'required' => 'Il titolo è obbligatorio',
            'min' => 'Il titolo deve contenere almeno :min caratteri',
            'max' => 'Il titolo non può superare i :max caratteri',
            'unique' => 'Esiste già un articolo con questo titolo',
        ],
        'slug' => [
            'required' => 'Lo slug è obbligatorio',
            'unique' => 'Esiste già un articolo con questo slug',
            'regex' => 'Lo slug può contenere solo lettere minuscole, numeri e trattini',
        ],
        'content' => [
            'required' => 'Il contenuto è obbligatorio',
            'min' => 'Il contenuto deve contenere almeno :min caratteri',
        ],
        'excerpt' => [
            'max' => 'L\'estratto non può superare i :max caratteri',
        ],
        'status' => [
            'required' => 'Lo stato è obbligatorio',
            'in' => 'Lo stato selezionato non è valido',
        ],
        'published_at' => [
            'date' => 'La data di pubblicazione deve essere una data valida',
            'after_or_equal' => 'La data di pubblicazione deve essere successiva o uguale a oggi',
        ],
        'author_id' => [
            'required' => 'L\'autore è obbligatorio',
            'exists' => 'L\'autore selezionato non esiste',
        ],
        'category_id' => [
            'required' => 'La categoria è obbligatoria',
            'exists' => 'La categoria selezionata non esiste',
        ],
        'meta_title' => [
            'max' => 'Il meta title non può superare i :max caratteri',
        ],
        'meta_description' => [
            'max' => 'La meta description non può superare i :max caratteri',
        ],
    ],

    'filters' => [
        'status' => [
            'label' => 'Stato',
            'placeholder' => 'Filtra per stato',
        ],
        'author' => [
            'label' => 'Autore',
            'placeholder' => 'Filtra per autore',
        ],
        'category' => [
            'label' => 'Categoria',
            'placeholder' => 'Filtra per categoria',
        ],
        'published_at' => [
            'label' => 'Data di pubblicazione',
            'placeholder' => 'Filtra per data di pubblicazione',
        ],
        'search' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca negli articoli...',
        ],
    ],

    'stats' => [
        'total' => [
            'label' => 'Totale articoli',
            'description' => 'Numero totale di articoli',
        ],
        'published' => [
            'label' => 'Articoli pubblicati',
            'description' => 'Numero di articoli pubblicati',
        ],
        'draft' => [
            'label' => 'Bozze',
            'description' => 'Numero di articoli in bozza',
        ],
        'recent' => [
            'label' => 'Articoli recenti',
            'description' => 'Articoli pubblicati negli ultimi 7 giorni',
        ],
    ],

    'empty_states' => [
        'no_articles' => 'Nessun articolo trovato',
        'no_published_articles' => 'Nessun articolo pubblicato',
        'no_draft_articles' => 'Nessuna bozza trovata',
        'create_first' => 'Crea il tuo primo articolo per iniziare',
    ],

    'help' => [
        'title' => 'Il titolo dell\'articolo deve essere descrittivo e accattivante per attirare i lettori',
        'slug' => 'Lo slug viene utilizzato nell\'URL dell\'articolo. Viene generato automaticamente dal titolo ma può essere personalizzato',
        'content' => 'Utilizza l\'editor rich text per formattare il contenuto dell\'articolo. Puoi aggiungere immagini, link e formattazione',
        'excerpt' => 'L\'estratto viene mostrato nelle anteprime degli articoli e nei meta tag per i motori di ricerca',
        'featured_image' => 'L\'immagine in evidenza viene mostrata nelle anteprime degli articoli e nelle condivisioni social',
        'status' => 'Gli articoli possono essere salvati come bozza, inviati in revisione o pubblicati immediatamente',
        'published_at' => 'La data di pubblicazione determina quando l\'articolo diventa visibile ai lettori',
        'seo' => 'I meta tag aiutano i motori di ricerca a comprendere e indicizzare il contenuto dell\'articolo',
    ],
];
=======
return array (
  'navigation' => 
  array (
    'name' => 'Articolo',
    'plural' => 'Articoli',
    'group' => 
    array (
      'name' => 'Content',
    ),
    'sort' => 91,
    'icon' => 'article.navigation',
    'label' => 'article.navigation',
  ),
  'rating' => 
  array (
    'no_import' => 'Nessuna cifra inserita',
    'import_zero' => 'Nessuna cifra inserita',
    'import_min' => 'Hai superato la cifra di :credits: crediti',
    'no_choice' => 'Nessuna opzione scelta',
  ),
  'single_expired' => 'Scaduto',
  'expired' => 'Articolo scaduto, non si possono fare più scommesse',
  'no_vote' => 'Siamo spiacenti, ma questa votazione è chiusa da :TIME, per favore prova a fare un altra previsione',
  'your_bet' => 'La tua previsione',
  'your_amount' => 'Previsione',
  'if_win' => 'Se vinci',
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'id',
    ),
    'title' => 
    array (
      'label' => 'title',
      'placeholder' => 'title',
      'helper_text' => 'title',
      'description' => 'title',
    ),
    'category' => 
    array (
      'title' => 
      array (
        'label' => 'category.title',
      ),
    ),
    'published_at' => 
    array (
      'label' => 'published_at',
      'placeholder' => 'published_at',
      'helper_text' => 'published_at',
      'description' => 'published_at',
    ),
    'closed_at' => 
    array (
      'label' => 'closed_at',
      'placeholder' => 'closed_at',
      'helper_text' => 'closed_at',
      'description' => 'closed_at',
    ),
    'rewarded_at' => 
    array (
      'label' => 'Premiato il',
      'placeholder' => 'rewarded_at',
      'helper_text' => 'rewarded_at',
      'description' => 'rewarded_at',
    ),
    'is_featured' => 
    array (
      'label' => 'is_featured',
      'description' => 'is_featured',
      'placeholder' => 'is_featured',
      'helper_text' => 'is_featured',
    ),
    'Categoria' => 
    array (
      'label' => 'Categoria',
    ),
    'fileContent' => 
    array (
      'label' => 'fileContent',
      'description' => 'fileContent',
      'helper_text' => 'fileContent',
      'placeholder' => 'fileContent',
    ),
    'file' => 
    array (
      'label' => 'file',
      'description' => 'file',
      'helper_text' => 'file',
      'placeholder' => 'file',
    ),
    'main_image_upload' => 
    array (
      'label' => 'main_image_upload',
      'description' => 'main_image_upload',
      'helper_text' => 'main_image_upload',
      'placeholder' => 'main_image_upload',
    ),
    'main_image_url' => 
    array (
      'label' => 'main_image_url',
      'description' => 'main_image_url',
      'helper_text' => 'main_image_url',
      'placeholder' => 'main_image_url',
    ),
    'category_id' => 
    array (
      'label' => 'category_id',
      'placeholder' => 'category_id',
      'helper_text' => 'category_id',
      'description' => 'category_id',
    ),
    'slug' => 
    array (
      'label' => 'slug',
      'placeholder' => 'slug',
      'helper_text' => 'slug',
      'description' => 'slug',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f0a0500 (.)
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
<<<<<<< HEAD
=======
>>>>>>> 7323f69 (.)
=======
>>>>>>> f0a0500 (.)
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'label' => 'import',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
  ),
  'model' => 
  array (
    'label' => 'article.model',
  ),
  'time_left' => 'Tempo rimasto: :hours ore, :minutes minuti',
  'time_left_days' => 'Tempo rimasto: :days giorni',
);
>>>>>>> ef4edf4 (.)
