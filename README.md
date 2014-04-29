FSL-Interpreter
===============

Fictitious scripting language interpreter


To Run it you will need:

Download phpredis from https://github.com/nicolasff/phpredis and in the same folder run
	phpize5
	./configure
	make && make install (as super user both)

once all is installed an configured just add <b> extension=redis.so </b> in the <b>Dynamic Extensions</b> section from <b>php.ini</b> file

