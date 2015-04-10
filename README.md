
My Website - oguzgelal.com
=====================

This is the source codes of my website, *still under development*. Here are some information:

- I used <a href="https://getcomposer.org/" target="_new">**Composer**</a> as the dependency manager.
- It uses <a href="http://www.slimframework.com/" target="_new">**Slim Framework**</a> (PHP) for the backend and a <a href="http://www.mysql.com/" target="_new">**MySQL**</a> database.
- As for the frontend, here is the list of things that are used so far:
	*  *PHP (as a templating engine)*
	*  <a href="http://jquery.com/" target="_new">jQuery</a>
	*  <a href="http://lesscss.org/" target="_new">Less</a>
	*  <a href="http://lessprefixer.com/" target="_new">Prefixer (Less plugin)</a>
	*  <a href="http://daneden.github.io/animate.css/" target="_new">Animate.css</a> (renamed to animate.less in utils)

Usage
--------------------

If you want to use these codes as a boilerplate, **you are welcomed to**. I was too lazy to install composer on my server so I just included all the dependencies here on GitHub. When you clone the repo, it should simply work. But if you have composer installed, a ``` sudo composer update ``` is adviced.

Database Configuration
--------------------
I use MAMP as a local server, which uses **apache**. And my webserver has LEMP stack installed so it uses **nginx**. So there are files for both configurations. You can use whichever you need.

Before usage, rename **dbinfo-sample.php** to **dbinfo.php** and fill in the fields with your database information.