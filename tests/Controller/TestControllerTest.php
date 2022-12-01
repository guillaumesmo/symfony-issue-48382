<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase {
    public function test()
    {
        $client = self::createClient();
        $client->request('GET', '/test');
        self::assertResponseIsSuccessful();
        $client->request('GET', '/test');
        self::assertResponseIsSuccessful();

        gc_collect_cycles();
        dump(memory_get_usage()/1024/1024);
    }
}
