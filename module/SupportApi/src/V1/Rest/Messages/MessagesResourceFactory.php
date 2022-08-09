<?php
namespace SupportApi\V1\Rest\Messages;

class MessagesResourceFactory
{
    public function __invoke($services)
    {
        return new MessagesResource();
    }
}
