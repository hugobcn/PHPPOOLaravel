<?php

$user = new UserTest(['name' => 'Duilio Palacios']);
 
$this->assertFalse(array_key_exists('name', $user));
 
$user = ['name' => 'Duilio'];
 
$this->assertTrue(array_key_exists('name', $user));

/**ArrayaccesLaravel***/

$user = new User(['name' => 'Duilio']);
 
echo $user->name; //Esto funciona y es muy comun
 
echo $user['name']; //Pero esto tambien va a funciona

/** ArrayAcces inyecion laravel **/

$app = app();
 
$app['message'] = new Message; //es equivalente a:
 
$app->bind('message', function () { 
    return new Message;
});
 
$app['message']->show('Styde Rules!'); //es equivalente a:
 
$app->make('message')->show('Styde Rules!');
