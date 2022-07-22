<?php

use DesignPatterns\Behavioral\Observer\Desktop;
use DesignPatterns\Behavioral\Observer\Mobile;
use DesignPatterns\Behavioral\Observer\Subject;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Behavioral\Observer\Mobile
 * @covers \DesignPatterns\Behavioral\Observer\Desktop
 * @covers \DesignPatterns\Behavioral\Observer\Subject
 */
final class ObserverPatternTest extends TestCase
{
    private Subject $subject;

    public function setUp(): void
    {
        $this->subject = new Subject();
    }

    public function testMobileNotification(): void
    {
        $mobile = new Mobile();
        $this->subject->attach($mobile);
        $this->expectOutputString("Notification on mobile application\n", $this->subject->notify());
    }

    public function testDesktopNotification(): void
    {
        $desktop    = new Desktop();
        $mobile     = new Mobile();
        $this->subject->attach($desktop);
        $this->subject->attach($mobile);
        $this->subject->detach($mobile);
        $this->expectOutputString("Notification on desktop application\n", $this->subject->notify());
    }


    public function tearDown(): void
    {
        unset($this->subject);
    }
}
