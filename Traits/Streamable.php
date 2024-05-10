<?php

trait Streamable
{
    public $streaming_services = [];

    public function addStreamingService($_service)
    {
        array_push($this->streaming_services, $_service);
    }

    public function getStreamingServices()
    {
        return implode(", ", $this->streaming_services);
    }
}
