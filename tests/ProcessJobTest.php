<?php


namespace Tests;


use App\ProcessDataSource;
use App\ProcessJob;
use App\WebService;
use PHPUnit\Framework\TestCase;

class ProcessJobTest extends TestCase
{
    public function test_sending_new_import_to_webservice()
    {
        //arrange
        $newData = [
            10 => 2,
            11 => 4,
        ];

        /** @var ProcessDataSource $dataSource */
        $dataSource = $this->prophesize( ProcessDataSource::class );

        /** @var WebService $webService */
        $webService = $this->prophesize( WebService::class );
        $dataSource->isSomethingPossible()->willReturn( true );
        $dataSource->newData()->willReturn( $newData );
        //act
        (new ProcessJob( $dataSource->reveal(), $webService->reveal() ))->execute();

        //assert
        foreach ($newData as $ckt => $categoryValue)
        {
            $webService->something( $ckt, $categoryValue )->shouldBeCalled();
        }
        $this->assertTrue( true );
    }

}