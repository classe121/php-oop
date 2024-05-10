<?php

require_once __DIR__ . '/Media.php';
require_once __DIR__ . '/../Traits/Streamable.php';

class Podcast extends Media
{
    // duration, episode
    use Streamable;

    public $duration;
    public $episode;

    public function __construct($_title, $_duration, $_episode)
    {
        parent::__construct($_title);
        $this->duration = $_duration;
        $this->episode = $_episode;
    }

    public function getFullDuration()
    {
        return $this->duration . " min.";
    }

    public function getDetails()
    {
        return "Episode N. {$this->episode} - Title: {$this->title} - Filesize: {$this->getFullFilesize()} - Duration: {$this->getFullDuration()} - Available on: {$this->getStreamingServices()}";
    }
}
