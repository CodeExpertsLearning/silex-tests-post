<?php
use Silex\Application;

$app = new Application();

$app['debug'] = true;

$app->get('/', function(Application $app){
    return $app['twig']->render('index.html.twig');
});

$app->get('/noticia/{slug}', function(Application $app, $slug){
    return $app['twig']->render('post.html.twig',[
        'slug' => $slug
    ]);
});


$app->register(new Silex\Provider\TwigServiceProvider(),
    [
        'twig.path' => __DIR__ . '/views/',
    ]
);

return $app;