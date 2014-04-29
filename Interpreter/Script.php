<?php

class Script {

    protected $_script;

    public function __construct($fslScript) {
        $this->_script = json_decode($fslScript, true);
    }

    public function getScript() {
        return $this->_script;
    }


}