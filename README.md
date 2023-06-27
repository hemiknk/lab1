# lab1
Here is how to check that migration works fine and scrip allows to return test customer from database:
* run migration using command `vendor/bin/phinx  migrate -e development`
* run local server `php -S localhost:8000`
* open in browser URL `http://localhost:8000/getCustomers.php`
* you should be able to see test customer in json format
* or run CLI command to fetch customers `getCustomers.php`

# lab2
According to instruction from https://www.jetbrains.com/teamcity/download/ lets run TeamCity in docker container
`docker run --name teamcity-server-instance \
-v teamCity:/data/teamcity_server/datadir \
-p 8111:8111 \
jetbrains/teamcity-server`

* run teamcity agent
`docker run -e SERVER_URL="localhost:8111" -v teamCity:/data/teamcity_agent/conf jetbrains/teamcity-agent`

`docker run -e SERVER_URL="http://teamcity-server-instance:8111" --link teamcity-server-instance -v agent:/data/teamcity_agent/conf jetbrains/teamcity-agent`

docker run -e SERVER_URL="http://teamcity-server-instance:8111" --link teamcity-server-instance -v agent:/data/teamcity_agent/conf jetbrains/teamcity-agent
