Maven-PHPServer
===============

Maven repository for PHP hostings.

Why I started this project
--------------------------

As a professional Java developer I use Maven. Inside the company network there is a maven repository with our own artifacts.
When I\'m writing a hobby project I would love to also have a maven repository. Sadly a Java hosting or VPS costs more than I\'m willing to pay for it.
However, my shared php has plenty of space and costs barely 1€ for each month.

Because of this I went looking for a Maven repository running on PHP,... but there was none I could find.

Purpose of the project
----------------------

This project should provide a Maven repository while being hosted on cheap shared php hostings.
Without the need for command line, cron,... all those thing not every php hosting provides.

Present features
----------------

  * Maven 'settings.xml' generation 
  * Multiple repositories
  * Manual artifact deployment
  
Intended features (incomplete)
-----------------

  * Automatic artifact deployment
  * Admin section
  * Security
  * Download statistics

Changes
-------

  1. (2014-01-06) Opensourced the project, current features: multiple repositories, manual artifact deployment, 'settings.xml' generation
  2. (2014-01-13) Make up README
