<?php

class Date extends CI_Model{
    function tgl()
    {
        $date = $this->now();
        return $date;
    }
}

