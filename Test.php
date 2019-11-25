<?php


class Test {

    private $_user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";

    private $_sleep = 0;

    private $_lang_s = '';
    private $_lang_t = '';

    private $_sources = array();

    function set_sleep($s) {
        $this->_sleep = $s;
        return $this;
    }

    function set_langs($from, $to) {
        $this->_lang_s = $from;
        $this->_lang_t = $to;
        return $this;
    }

    function set_text($src) {
        $this->_sources = is_array($src) ? $src : array($src);
        return $this;
    }



    function translate() {
        var_dump($this->_sources);
    }
}


