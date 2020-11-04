<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Microservices architecture

This repository implements a micro-service architecture that provides two sets of REST endpoints to be displayed by a UI

	* USERS CRUD
	* USER's TASK CRUD

The two sets of endpoints defined as fallows.
	
	## USERS CRUD
	
	* /Users:get -> List the users
	* /Users/{id}:put -> update a single user
	* /Users/{id}:delete -> deletes a single user
	* /Users/{id}:get -> Select a single user
	* /Usuario:post -> create a new user.

	## USER_TASKS

	* /Tasks:get -> List all the task for a single user
	* /Tasks/{id}:get -> select a single task
	* /Tasks/userTask/{user_id}:get -> get a single task from a single user
	* /Tasks/{user_id}:get -> get all the tasks from a single user
	* /Tasks/{id}:put -> update a single user's task
	* /Tasks:post -> create a new user's task


This repository is powered by Laravel then you need to run, the commands described below.

	>> install composer
	>> create the database in any DB or DBaaS that you want.
    >> config your .env file.
    >> run the databases's migrations file.
	>> execute 'run-laravel' command on the CLI is an alias for 'php artisan serve'

The server will run on the port: https://127.0.0.1:8000/api/
