<?php


namespace Tests;


use App\ImportDataSource;
use App\ImportJob;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;

class ImportJobTest extends TestCase
{

    public function test_running_import_bla_blaa_bla_blabla()
    {
        //arrange
        /** @var ImportDataSource $dataSource */
        $dataSource = $this->prophesize( ImportDataSource::class );
        $dataSource->isImportPossible()->willReturn( true );
        //act
        (new ImportJob( $dataSource->reveal() ))->execute();
        //assert
        $dataSource->import()->shouldBeCalled();
    }
}