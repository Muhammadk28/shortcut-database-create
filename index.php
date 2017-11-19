<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'kayes',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();


// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

Capsule::schema()->dropIfExists('doctors');


Capsule::schema()->create('doctors', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('address')->unique();
    $table->string('phone')->unique();
    $table->timestamps();
});
Capsule::schema()->create('cities', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('division')->unique();
    $table->timestamps();
});
Capsule::schema()->create('hospital', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});
Capsule::schema()->create('spiallity', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});