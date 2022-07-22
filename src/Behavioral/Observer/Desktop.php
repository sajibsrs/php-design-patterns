<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Desktop implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Notification on desktop application\n";
    }
}
