<?php


namespace App;


interface ImportDataSource
{
    public const STATUS_PENDING = 1;
    public const STATUS_CANCELED = 2;
    public const STATUS_DONE = 3;
    public const STATUS_ERROR = 4;

    public function import(): void;

    public function isImportPossible(): bool;
}