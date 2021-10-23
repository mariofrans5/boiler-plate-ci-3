<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CODEIGNITER template library
 *
 * @author  J�r�me Jaglale
 * @url     http://maestric.com/doc/php/codeigniter_template
 */

class Template
{
      private $template_data = array();

      private function set($name, $value)
      {
         $this->template_data[$name] = $value;
      }

      public function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
      {
         $CI =& get_instance();
         $this->set('contents', $CI->load->view($view, $view_data, TRUE));
         return $CI->load->view($template, $this->template_data, $return);
      }
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */