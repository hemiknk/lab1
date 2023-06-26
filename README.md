# lab1
Here is how to check that migration works fine and scrip allows to return test customer from database:
* run migration using command `vendor/bin/phinx  migrate -e development`
* to fetch customers run CLI command `getCustomers.php` or GET /getCustomers.php