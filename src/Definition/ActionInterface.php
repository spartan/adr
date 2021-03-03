<?php

namespace Spartan\Adr\Definition;

use Psr\Http\Message\ServerRequestInterface;

/**
 * ActionInterface
 *
 * @package Spartan\Adr
 * @author  Iulian N. <iulian@spartanphp.com>
 * @license LICENSE MIT
 */
interface ActionInterface
{
    /**
     * @return mixed|array
     */
    public function __invoke();

    /**
     * @return ServerRequestInterface
     */
    public function request(): ServerRequestInterface;

    /**
     * @return ResponderInterface
     */
    public function responder(): ResponderInterface;

    /**
     * @return mixed[]
     */
    public static function middleware(): array;
}
