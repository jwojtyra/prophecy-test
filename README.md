`$ ./vendor/bin/phpunit`
```
PHPUnit 8.0.4 by Sebastian Bergmann and contributors.

E.                                                                  2 / 2 (100%)

Time: 31 ms, Memory: 4.00 MB

There was 1 error:

1) Tests\ImportJobTest::test_running_import_bla_blaa_bla_blabla
Prophecy\Exception\Call\UnexpectedCallException: Unexpected method call on Double\ImportDataSource\P1:
  - import(

    )
expected calls were:
  - isImportPossible(

    )

/home/jawojtyra/workspace/test/src/ImportJob.php:27
/home/jawojtyra/workspace/test/tests/ImportJobTest.php:22

ERRORS!
Tests: 2, Assertions: 3, Errors: 1.
```
