<?php
namespace App\CustomModules\ExampleModule;
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
