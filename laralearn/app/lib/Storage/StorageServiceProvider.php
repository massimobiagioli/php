<?php

namespace Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('Storage\Author\AuthorRepository', 'Storage\Author\EloquentAuthorRepository');
    }

}
