<?php

class Template extends CI_Model {

    var $data;
    var $directory;

    function set_directory($value) {
        $this->directory = $value;
    }

    function assign($key, $value) {
        $this->data[$key] = $value;
    }
    
    function display($template) {
        $this->twig->display($this->directory.'/'.$template . '.twig', $this->data);
    }
}

?>