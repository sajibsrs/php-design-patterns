<?php

declare(strict_types = 1);

require_once "Pizza.php";

$recipe = (new PizzaBuilder(9))
            ->cheese(true)
            ->pepperoni(true)
            ->bacon(false)
            ->build();

$order = new Pizza($recipe);
echo $order->show();
