<?php

class SessionTest
{
    public function testConfig()
    {
        $test = new \Aw\Session();
        $test->setSavePath(__DIR__.'/session_save_dir');
        $test->start();
        $test->set('c.d','foo');
        var_dump('foo' == $test->get('c.d'));
        $test->set('b.b','cc');
        var_dump($_SESSION['b']['b'] == 'cc');
        var_dump($test->getId());
    }
}

