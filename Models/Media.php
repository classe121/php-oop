<?php

class Media
{
    // dimensioni, unità di misura dimensione, titolo
    public $filesize;
    public $filesize_unit;
    public $title;

    public function __construct($_title)
    {
        // $this->title = $_title;
        $this->setTitle($_title);
    }

    public function getDetails()
    {
        return "Title: {$this->title} - Filesize: {$this->getFullFilesize()}";
    }

    public function getFullFilesize()
    {
        return $this->filesize . $this->filesize_unit;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getFilesize()
    {
        return $this->filesize;
    }

    public function getFilesizeUnit()
    {
        return $this->filesize_unit;
    }

    public function setTitle($_title)
    {
        $this->title = strtoupper($_title);
    }

    public function setFilesize($_filesize)
    {
        $this->filesize = $_filesize;
    }

    public function setFilesizeUnit($_filesize_unit)
    {
        $this->filesize_unit = $_filesize_unit;
    }
}
