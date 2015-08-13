<?php
class News {
    public $dataCreateNews;
    public $titleNews;
    public $descriptionNews;
    public $textNews;

    function __construct ($dat, $tit, $des='', $tex) {
        $this->dataCreateNews = $dat;
        $this->titleNews =  $tit;
        $this->textNews = $tex;
    }

    function ShowInfo() {
        echo '<hr>';
        $this->getDescription($this->textNews);
        echo "$this->dataCreateNews<br>";
        echo '<hr>';
        echo "$this->titleNews<br>";
        echo '<hr>';
        echo "$this->descriptionNews<br>";
        echo '<hr>';
        echo "$this->textNews";
        echo '<hr>';
    }

    function getDescription ($tex) {
        $this->descriptionNews = substr($tex, 0, 500) . "  >>>";
    }
}