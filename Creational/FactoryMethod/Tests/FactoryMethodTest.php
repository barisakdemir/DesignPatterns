<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FacoryMethod\Tests;

use DesignPatterns\Creational\FacoryMethod\FileLogger;
Use DesignPatterns\Creational\FacoryMethod\FileLoggerFactory;
Use DesignPatterns\Creational\FacoryMethod\StdoutLogger;
use DesignPatterns\Creational\FacoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMEthodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}