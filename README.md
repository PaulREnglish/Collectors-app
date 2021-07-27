## Collectors App

This is a collectors app which retrieves data about hexen, heretic and doom
weapons from a database and displays their stats onto a webpage.

It uses php and it also uses sql for the database.  I've also done a bit
of unit testing which you can see in the tests folder.  To run the tests 
install phpunit and run the command 'phpunit functions.php' whilst in 
the 'tests' directory.

To do:
Install functionality that closes the connection to the database so that
the database doesn't have too many open connections at once.
Try to run the unit tests on my windows machine.
