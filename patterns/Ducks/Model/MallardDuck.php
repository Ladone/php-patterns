<?php

declare(strict_types=1);

namespace Ducks\Model;

use Ducks\Model\Duck;

class MallardDuck extends Duck
{

    public function __construct()
    {

    }

    public function display(): void
    {
        echo 'I\m really Mallard Duck';
    }
}