<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\ApiTools\Rest\AbstractResourceListener;

class TicketsResource extends AbstractResourceListener
{
    private $_ticketRepository;

    public function __construct(TickerRepository $tickerRepository)
    {
        $this->_ticketRepository = $tickerRepository;
    }

    /**
     * @param $params
     * @return \Laminas\ApiTools\ApiProblem\ApiProblem|\Laminas\Db\ResultSet\ResultSetInterface|mixed
     */
    public function fetchAll($params = [])
    {
        return $this->_ticketRepository->getTickets();
    }

    /**
     * @param $id
     * @return \Laminas\ApiTools\ApiProblem\ApiProblem|\Laminas\Db\ResultSet\ResultSetInterface|mixed
     */
    public function fetch($id)
    {
        return $this->_ticketRepository->getTicketById($id);
    }

    /**
     * @param $data
     * @return string[]
     */
    public function create($data)
    {
        $this->_ticketRepository->createTicket($data);

        return ['message' => 'Ticket successfully created'];
    }

    /**
     * @param $data
     * @param $id
     * @return string[]
     */
    public function update($data, $id)
    {
        $this->_ticketRepository->updateTicket($data, $id);

        return ['message' => 'Ticket successfully updated'];
    }

    /**
     * @param $id
     * @return string[]
     */
    public function delete($id)
    {
        return ['message' => 'Ticket successfully deleted'];
    }
}
