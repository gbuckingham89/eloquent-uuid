# gbuckingham89/eloquent-uuid

A simple package for using UUID's (UUID4) with Laravel's Eloquent.

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

Code and documentation copyright 2017 [George Buckingham](https://www.georgebuckingham.com). Code released under the [MIT License](https://github.com/gbuckingham89/eloquent-uuid/blob/master/LICENSE).