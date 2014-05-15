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
     *   see http://docs.slimframework.com/#Routing-Overview
     */
    public function helloWorld($app) {
        // register controller under http://datawrapper/hello-world
        $app->get('/hello-world', function() use ($app) {
            echo "Hello World";
        });
    }

}

?>