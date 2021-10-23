<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\CustomModules\ExampleModule\Example;

class Home extends \MY_Controller
{
    private $custom_module;

    public function __construct()
    {
        parent::__construct();

        $this->custom_module = new Example();
    }

    public function index()
    {
        $data = [];
        $data['message']= "from Home";
		$this->template->load('template/main','home/index',$data);
    }

    public function example()
    {
        $data = [];
        $data['message']= $this->custom_module->getExample();
		$this->template->load('template/main','home/example',$data);
    }
}
