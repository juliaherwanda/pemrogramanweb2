<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //Override
    public function ucapkanSalam()
    {
      echo "Hello my name is "; $this->nama;
    }
}
