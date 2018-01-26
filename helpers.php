<?php

if(!function_exists('config')){
    /**
     * get a config
     * @param string $key
     * @param bool $throw
     * @return mixed|null|\Moon\Config\Exception
     */
    function config($key, $throw = false){
        return Moon\Config\Config::get($key, $throw);
    }
}



