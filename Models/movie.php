<?php

class movie
{
public $title;
public $year;
public $language;
public $genres = [];


function __construct($_title, $_language, $_year, $_genres)
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
