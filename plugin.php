<?php

class DatawrapperPlugin_HelloWorld extends DatawrapperPlugin {

    public function init() {
        // whatever we do here will be executed on each request
        // Try to uncomment the following line to break Datawrapper
        //print "Hello world"; exit;

        // let's register a new page within Datawrapper
        DatawrapperHooks::register(
            DatawrapperHooks::GET_PLUGIN_CONTROLLER,
            array($this, 'helloWorld')
        );
    }

    /*
     * controller function
     *
     * @param app  Slim Framework instance
     */
    public function helloWorld($app) {
        // register another controller with a dynamic url
        $app->get('/hello/:name', function($name) use ($app) {
            // it's a better idea to use a template
            $context = array('name' => $name);
            $app->render('plugins/hello-world/hello-world.twig', $context);
        });

        // see http://docs.slimframework.com/#Routing-Overview for more
    }

}

?>