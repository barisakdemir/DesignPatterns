<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FacoryMethod;

interface Logger
{
    public function log(string $message);
}