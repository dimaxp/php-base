<?php

require_once "ParamHandler.php";
class XmlHandler extends ParamHandler
{

    public function write()
    {
        var_dump("XmlHandler write");
    }

    public function read()
    {
        var_dump("XmlHandler read");
    }
}