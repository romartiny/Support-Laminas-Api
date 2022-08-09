<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Paginator\Paginator;

class TicketsCollection extends Paginator
{
    private $_id;
    private $_title;
    private $_question;
    private $_status;
    private $_created_at;


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->_question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question): void
    {
        $this->_question = $question;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->_status = $status;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->_created_at;
    }

    public function toArray($data): array
    {
        return [
            'id' => $this->_id,
            'title' => $this->_title,
            'question' => $this->_question,
            'status' => $this->_status,
            'created_at' => $this->_created_at->format('Y-m-d h:m:s'),
        ];
    }
}
