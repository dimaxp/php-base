<?php

require_once "ParamHandler.php";

class TxtHandler extends ParamHandler
{

    public function write()
    {
        var_dump("TxtHandler write");
    }

    public function read()
    {
        var_dump("TxtHandler read");
    }
}