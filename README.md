Weison Application
===================================
This is a Yii2 Application.

This application has a rest api sub Application,you can find in Api folder.


REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

1, Use git clone command in your command line  this application to you directory:

~~~
git clone git@github.com:weison-tech/weison.git
~~~


2, Cd in your applaction root dir and run the composer update command:

~~~
cd weison && composer update
~~~

3, Init you application:

~~~
php init
~~~

4, Update common/config/main.php file to adapt to you database.

5, Update database schema for your user module

~~~
$ php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations
~~~