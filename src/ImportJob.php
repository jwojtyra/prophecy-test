<?php


namespace App;


class ImportJob
{
    /**
     * @var ImportDataSource
     */
    private $dataSource;

    /**
     * ImportJob constructor.
     * @param ImportDataSource $dataSource
     */
    public function __construct(ImportDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function execute(): void
    {
        if ($this->dataSource->isImportPossible())
        {
            $this->dataSource->import();
        }
    }
}