# WikiTest

## assumptions
No DB was specified so assumed developer choice. Chose MySql as fiddle tools appeared to be unavailable for MariaDb and time was insufficient to set up a full local install.
Tested with PHP 8

## thoughts
Initial thoughts were to add an id or use row_number
As this was not within the given parameters, the quicker (but IMHO less ideal) string comparison was used. 
This is not suitable for production as it is unpredictable depending on character sets.
As instructed, param escaping and injection was ignored but this solution is vulnerable.

