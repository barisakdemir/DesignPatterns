<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixWriterFactory implements UnixWriterFactory
{
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}