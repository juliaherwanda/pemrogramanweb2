<?php
//Nilai.php
class Nilai{
    protected $tugas =0;
    protected $uts =0;
    protected $uas =0;

    //setter 
    public function setTugas($tugas){
        $this->tugas = $tugas;
    }

    public function setUts($uts){
        if($uts >= 0 && $uts <= 100)
        $this->uts = $uts;

    }
    public function setUas($uas){
        if($uas >= 0 && $uas <= 100)
        $this->uas = $uas;
    }

    //Getter
    public function getTugas (){
        return $this->tugas;
    }

    public function getUts (){
        return $this->uts;
    }

    public function getUas (){
        return $this->uas;
    }
}