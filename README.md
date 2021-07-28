## Collectors App

This is a collectors app which retrieves data about Hexen, Heretic and Doom
weapons from a database and displays their stats on a webpage.

It uses PHP and it also uses SQL for the database.  I've also done a bit
of unit testing which you can see in the tests folder.  To run the tests 
install PHPUnit and run the command 'phpunit functions.php' whilst in 
the 'tests' directory.


### Changes yet to be made:

Install functionality that closes the connection to the database so that
the database doesn't have too many open connections at once.

Try to run the unit tests on my Windows machine.
