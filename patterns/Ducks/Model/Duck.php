<?php

declare(strict_types=1);

namespace Ducks\Model;

use Ducks\Behaviour\FlyBehaviour;
use Ducks\Behaviour\QuackBehaviour;

abstract class Duck
{
    public QuackBehaviour $quackBehaviour;
    public FlyBehaviour $flyBehaviour;

    public function __construct()
    {
    }

    public abstract function display(): void;

    public function performFly(): void
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehaviour->quack();
    }

}
