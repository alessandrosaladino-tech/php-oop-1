<?php

class movie
{
public $title;
public $language;
public $year;
public $genres = [];


function __construct($_title, $_year, $_language, $_genres)
{
    $this->title = $_title;
    $this->language = $_language;
    $this->year = $_year;
    array_push($this->genres, $_genres);
}

function addGenres($_genres){
    array_push($this->genres, $_genres);
}


};
