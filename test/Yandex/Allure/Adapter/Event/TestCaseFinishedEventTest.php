<?php

namespace Yandex\Allure\Adapter\Event;

use Yandex\Allure\Adapter\Model\TestCase;
use PHPUnit\Framework\TestCase as PhpUnitTestCase;

class TestCaseFinishedEventTest extends PhpUnitTestCase
{
    public function testEvent()
    {
        $testCase = new TestCase();
        $event = new TestCaseFinishedEvent();
        $event->process($testCase);
        $this->assertNotEmpty($testCase->getStop());
    }
}
