<?php


namespace App;


class ProcessJob
{
    /**
     * @var ProcessDataSource
     */
    private $dataSource;
    /**
     * @var WebService
     */
    private $webService;

    /**
     * ProcessJob constructor.
     * @param ProcessDataSource $dataSource
     * @param WebService $webService
     */
    public function __construct(ProcessDataSource $dataSource, WebService $webService)
    {
        $this->dataSource = $dataSource;
        $this->webService = $webService;
    }

    public function execute()
    {
        if ($this->dataSource->isSomethingPossible() !== true)
        {
            return;
        }
        foreach ($this->dataSource->newData() as $key => $value)
        {
            $this->webService->something( $key, $value );
        }
    }
}