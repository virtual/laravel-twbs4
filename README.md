# Laravel implementing Bootstrap 4 and FontAwesome

[View demo](http://virtual-laravel-twbs4.herokuapp.com/)

## Development

- `cd ~/Homestead`
- `vagrant up`
- `vagrant ssh` - log in to vagrant
- `cd code/test`
- `npm run watch-poll` - Watch and compile changes, must be done from vagrant server

_Note: currently public folder includes use http; need to get it to use https instead_

## New Dev Environments

- Install Vagrant and VirtualBox per [Laravel Homestead guide](https://laravel.com/docs/5.6/homestead)
- `cd ~/Homestead`
- `vagrant up` (and if everything's missing reload provision)
- Add site path (homestead.test) to /etc/hosts:  `192.168.10.10 homestead.test`
- `npm install`
- `composer install`
- Add in the .env file
