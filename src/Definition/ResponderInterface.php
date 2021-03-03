<?php

namespace Spartan\Adr\Definition;

use Psr\Http\Message\ResponseInterface;

/**
 * ResponderInterface
 *
 * @package Spartan\Adr
 * @author  Iulian N. <iulian@spartanphp.com>
 * @license LICENSE MIT
 */
interface ResponderInterface
{
    /**
     * @param mixed $payload Payload provided by Action
     *
     * @return ResponseInterface
     */
    public function __invoke($payload = null): ResponseInterface;
}
