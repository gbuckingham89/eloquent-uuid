# gbuckingham89/eloquent-uuid v3

A simple package for using UUID's with Laravel's Eloquent models. By including the trait on your models, they will automatically get given a time ordered UUIDv4 for their key (ID) when being persisted to the database.

The current version requires Laravel 5.6 (PHP 7.1) or greater. *If you're using an older version of Laravel, please see [v1](https://github.com/gbuckingham89/eloquent-uuid/tree/1.0.1) of this package.*

## Installation

	composer require gbuckingham89/eloquent-uuid

## Use

Make sure your database table(s) are setup to handle UUID's. Laravel has a  method called `uuid()` which you can use in your migrations. You will probably want the field to be unique too.

    Schema::create('users', function (Blueprint $table) {
        $table->uuid('id')->unique();
        // Other fields here...
    });

At the top of your model(s) you simply need to include a trait:

    <?php

    namespace App;
    use Gbuckingham89\EloquentUuid\Traits\UuidForKey;
    use Illuminate\Database\Eloquent\Model;

    class User extends Eloquent
    {
        use UuidForKey;
    }

## Copyright and license

Code and documentation copyright [George Buckingham](https://www.georgebuckingham.com). 

Code released under the [MIT License](https://github.com/gbuckingham89/eloquent-uuid/blob/master/LICENSE).
