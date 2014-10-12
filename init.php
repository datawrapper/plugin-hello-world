<?php

// let's register a new page within Datawrapper
DatawrapperHooks::register(DatawrapperHooks::GET_PLUGIN_CONTROLLER, function($app) {

    $app->get('/hello/:name', function($name) use ($app) {
        // it's a better idea to use a template
        $context = array(
            'name' => $name,
            'title' => 'Hello World'
        );
        // set context for header navigation
        add_header_vars($context, 'hello');
        // render context in template
        $app->render('plugins/hello-world/hello-world.twig', $context);
        // see http://docs.slimframework.com/#Routing-Overview for more
    });
});
