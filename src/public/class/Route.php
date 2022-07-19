<?php

namespace app;

class Route
{
         private $path;
         private $collable;

    /**
     * @param $path
     * @param $collable
     */
    public function __construct($path, $collable)
    {
        $this->path = $path;
        $this->collable = $collable;
    }


}