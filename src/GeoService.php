<?php


namespace Yuriy\Geo;


interface GeoService
{
    public function continentCode();

    public function countryCode();

    public function parse($ip);
}
