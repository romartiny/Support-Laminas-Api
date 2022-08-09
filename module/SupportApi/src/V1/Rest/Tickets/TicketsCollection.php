<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Paginator\Paginator;

class TicketsCollection extends Paginator
{
    public function toArray($data): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'question' => $this->question,
            'status' => $this->status,
            'created_at' => $this->created_at->format('Y-m-d h:m:s'),
        ];
    }
}
