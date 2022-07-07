<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;

    public $slug;

    public $date;

    public $body;

    public function __construct($title, $slug, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->date = $date;
        $this->body = $body;
    }

    static function all () {
        return collect(
            File::files(resource_path('/posts'))
        )->map(fn ($file) =>
            YamlFrontMatter::parseFile( $file->getPathname() )
        )->map(fn ($document) =>
            new Post(
                $document->matter('title'),
                $document->matter('slug'),
                $document->matter('date'),
                $document->body()
            )
        );
    }

    static function find ($slug) {
        return static::all()
            ->firstWhere('slug', $slug);
    }

}
