<?php

interface IParamHandler
{
    public function addParam($key, $value);
    public function getAllParams();
    public function write();
    public function read();
}