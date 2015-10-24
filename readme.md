What's Included
===============

This package is a boilerplate project for WordPress sites.

> Bootstrap theme
> Bootstrap 3.3.5
> Jasny Bootstrap 3.1.3
> Bootstrap Responsive Toolkit 2.3.0
> Font awesome 4.3.0
> Well thought out SCSS File structure
> Gulp file with tasks for transpiling SCSS and coffee, Compressing images and compressing JS
> Behat front-end testing kickstart
> Striped down 'barebones' template
> Default robots.txt
> Default .gitignore
> Disabled XMLRPC Security Patch
> Disable WordPress Emjois JS
> Other cool things

Setup
=====


WordPress
----
> Install as normal
> Remember to set bootstrap as default theme


Gulp
----

> Run npm install from the root.
> Gulp is ready to go e.g. "gulp sass" from the root.

Behat
-----

> Run composer install from project root.
> Download selenium standalone from http://www.seleniumhq.org/download/ into ~/selenium/
> Start server using ./startserver.sh.
> Run behat with ./vendors/behat/bin/behat

Homestead (mavericks)
---------------------

> Download and install VirtualBox https://www.virtualbox.org/wiki/Downloads
> and Vagrant http://www.vagrantup.com/downloads.html
> Run "vagrant box add laravel/homestead"
> Run "composer global require "laravel/homestead=~2.0"
> Run "~/.composer/vendor/bin/homestead init"
> Run "~/.composer/vendor/bin/homestead edit"
> or edit "~/.homestead/Homestead.ymal
> Edit:

    folders:
        - map: ~/Sites/ // Your site location
          to: /home/vagrant/Code

    sites:
        - map: www.wordpress-site.app // Your site name
          to: /home/vagrant/Code/yoursite // Your site name
        - map: www.wordpress-site2.app // Your site name
          to: /home/vagrant/Code/yoursite2 // Your site name
          hhvm: true

> Run "~/.composer/vendor/bin/homestead up"
> Provision more sites by adding to the sites above and running "vagrant provision"
> Or "vagrant global-status" followed by "vagrant provision {ID OF VM}"
> SSH into the VM can be achieved with using "ssh homestead" after adding the following to your ~/.ssh/config file

    Host homestead
       HostName 127.0.0.1
       IdentityFile ~/.ssh/id_rsa
       User vagrant
       Port 2222


Credit Where Credit Is Due
==========================

>  http://3sparks.net/ - For the base of the bootstrap theme.


Update Log
==========

24th October 2015
-----------------

> Added Headers filter to remove the X-Pingback header. This is a red flag for attackers.
> Changed to using bower components for theme assets.

11th October 2015
-----------------

> Added boiler logo and SCSS files layout.