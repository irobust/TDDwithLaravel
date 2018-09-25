## Command for PHPUnit
Go to laravel folder and run this command for exeute test suite
- vendor/bin/phpunit (Run all Test Class in all folders)
- vendor/bin/phpunit ExampleTest  (Run only **ExampleTest.php**)
- vendor/bin/phpunit --testsuite=Unit (Run only Test Class in **Unit** folder)
- vendor/bin/phpunit --filter=test_normal_case (Run only test case that match this regular expression)

Create Model
- php artisan make:model Example
