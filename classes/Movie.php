<?php

class Movie{
    private $title;
    private $country;
    private $genre;
    private $release;
    private $director;
    private $rating;
    private $length;
    
    /**
     * Movie__constructor
     *
     * @param  $_title
     * @param  $_country
     * @param  $_genre
     * @param  $_release
     * @param  $_director
     * @param  $_rating
     * @param  $_length
     */


    function __construct($_title, $_country, $_genre, $_release, $_director, $_rating, $_length ){
        $this->title = $_title;
        $this->country = $_country;
        $this->genre = $_genre;
        $this->release = $_release;
        $this->director= $_director;
        $this->rating= $_rating;
        $this->length= $_length;
    }

    public function getTitle(){
        return $this->title;
    }
    
    public function getCountry(){
        return $this->country;
     }
      
    public function getGenre(){
        return $this->genre;
    }

    public function getRelease(){
        return $this->release;
    }

    public function getDirector(){
        return $this->director;
    }

    public function getRating(){
        return $this->rating;
    }

    public function getLength(){
        return $this->length;
    }

    }






?>