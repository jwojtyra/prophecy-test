<?php


namespace App;


interface ProcessDataSource
{
    public function isSomethingPossible(): bool;

    public function newData(): array;

    public function currentData(): array;
}