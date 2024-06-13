<?php

namespace Rafaschneider\HelloPackagist;

class Hello
{
    public function world(): string
    {
        return 'Hello World!';
    }

    public function packagist(): string
    {
        return 'Hello Packagist';
    }
}