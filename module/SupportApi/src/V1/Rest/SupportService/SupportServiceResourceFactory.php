<?php
namespace SupportApi\V1\Rest\SupportService;

class SupportServiceResourceFactory
{
    public function __invoke($services)
    {
        return new SupportServiceResource();
    }
}
