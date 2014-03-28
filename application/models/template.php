<?php

class Template extends CI_Model {

    var $data;

    function assign($key, $value) {
        $this->data[$key] = $value;
    }
    
    function display($template) {
        $this->twig->display($template . '.twig', $this->data);
    }
}

?>
