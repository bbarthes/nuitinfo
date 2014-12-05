<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();



$app->group('/user', function () use($app) {

    $app->get('/add/:name/:mail', function ($name, $mail) use($app) {
        $pwd = $app->request->params('pwd');
    });

    $app->get('/connect/:name', function ($name ) use($app) {
        $pwd = $app->request->params('pwd');
    });
    $app->get('/connect/:name', function ($name ) use($app) {
        $pwd = $app->request->params('pwd');
    });
    $app->get('/disconnect', function () {
        
    });

    $app->get('/add/item/:iditem/:qt', function ($iditem, $qt) {
        
    });

    $app->get('/remove/item/:iditem/:qt', function ($iditem, $qt) {
        
    });

    $app->get('/listitem/:iduser', function ($iduser) {
        
    });
});

$app->group('/item', function () use($app) {
    
    $app->get('/:iditem', function ($iditem) {
        
    });
    
    $app->get('/list', function () {
        
    });
    $app->get('/add/:name/:describe', function ($name, $mail) {
        
    });
});

$app->group('/group', function () use($app) {
    
    $app->get('/:idgroup', function ($idgroup) {
        
    });
    
    $app->get('/list', function () {
        
    });
    
    $app->get('/join/:idgroup', function ($idgroup) {
        
    });
    
    $app->get('/leave/:idgroup', function ($idgroup) {
        
    });
    
    $app->get('/additem/:iditem/:qt', function ($iditem, $qt) {
        
    });
    
    $app->get('/remove/:iditem/:qt', function ($iditem, $qt) {
        
    });
    
    $app->get('/create/:name', function ($name) {
        
    });
    
});


$app->run();
