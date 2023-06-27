# lab1
Here is how to check that migration works fine and scrip allows to return test customer from database:
* run migration using command `vendor/bin/phinx  migrate -e development`
* run local server `php -S localhost:8000`
* open in browser URL `http://localhost:8000/getCustomers.php`
* you should be able to see test customer in json format
* or run CLI command to fetch customers `getCustomers.php`