<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Mobile implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Notification on mobile application\n";
    }
}
