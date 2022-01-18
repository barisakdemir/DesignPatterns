<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FacoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}