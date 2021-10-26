<?php
namespace App\CustomModules\ExampleModule;
defined('BASEPATH') OR exit('No direct script access allowed');

class Example 
{
    private $ci;

    public function __construct()
    {
        $this->ci =& get_instance();    
    }

    public function getExample()
    {
        return "from Example";
    }
}
