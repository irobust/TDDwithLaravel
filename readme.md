## Command for PHPUnit
Go to laravel folder and run this command for exeute test suite
- vendor/bin/phpunit (Run all Test Class in all folders)
- vendor/bin/phpunit ExampleTest  (Just run **ExampleTest.php** only)
- vendor/bin/phpunit --testsuite=Unit (Just run Test Class in Folder **Unit** Only)
- vendor/bin/phpunit --filter=test_normal_case (Just run only test case that match this regular expression)

Create Model
- php artisan make:model Example
