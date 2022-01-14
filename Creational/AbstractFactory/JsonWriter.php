<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface JsonWriter
{
    public function writer(array $data, bool $formatted): string;
}