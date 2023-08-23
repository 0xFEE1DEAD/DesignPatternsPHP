<?php

interface LogInterface
{
    public function log(string $message) : void;
}

class FileLog implements LogInterface
{
    public function log(string $message) : void
    {
        echo "log \"$message\" to file" . PHP_EOL;
    }
}

class DatabaseLog implements LogInterface
{
    public function log(string $message) : void
    {
        echo "log \"$message\" to database" . PHP_EOL;
    }
}

class App
{
    protected ?LogInterface $logger = null;

    public function setLogger(?LogInterface $logger=null) : self
    {
        $this->logger = $logger;

        return $this;
    }

    public function log(string $message) : void
    {
        if(!is_null($this->logger))
        {
            $this->logger->log($message);
        }
    }
}

$app = new App;

$app->log('Log without logger');

$app->setLogger(new FileLog);

$app->log('log with file log');

$app->setLogger(new DatabaseLog);

$app->log('log to database log');

/**
 * Суть паттерна в том, чтобы агрегировать логику алгоритмов в классы и при необходимости заменять их.
 * Например: стратегии логирования, отправки почты. Т. е взаимозаменяемые задачи.
 */