<?php

namespace Tests\Leos\UI\RestBundle\Controller\Monitor;

use Lakion\ApiTestCase\JsonApiTestCase;

/**
 * Class StatusControllerTest
 *
 * @package Leos\UI\RestBundle\Controller\Monitor
 */
class StatusControllerTest extends JsonApiTestCase
{
    public function setUp()
    {
        $this->setUpClient();
        $this->expectedResponsesPath = $this->client->getContainer()->getParameter('kernel.root_dir') . "/../tests/Leos/UI/RestBundle/Response/Monitor";
    }

    /**
     * @group unit
     */
    public function testPingAction()
    {
        $this->client->request('GET', '/api/v1/monitor/ping.json');

        self::assertResponse($this->client->getResponse(), "ping");
    }
}
