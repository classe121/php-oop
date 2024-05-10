<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Song extends Media
{
    // autore, genere, durata
    use Streamable;

    public $author;
    public $genre;
    public $duration;
    // public $streaming_services = [];

    public function __construct($_title, $_author, $_genre, $_duration)
    {
        parent::__construct($_title);
        $this->author = $_author;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }

    // public function addStreamingService($_service)
    // {
    //     array_push($this->streaming_services, $_service);
    // }

    // public function getStreamingServices()
    // {
    //     return implode(", ", $this->streaming_services);
    // }

    public function getFullDuration()
    {
        return $this->duration . " min.";
    }

    public function getDetails()
    {
        return "Title: {$this->title} - Filesize: {$this->getFullFilesize()} - Author: {$this->author} - Duration: {$this->getFullDuration()} - Available on: {$this->getStreamingServices()}";
    }
}
