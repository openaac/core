<?php

namespace OpenAAC\Core\Contracts;

interface Distribution
{
    /**
     * Return a key value based array of all the contract implementations.
     *
     * @return array
     */
    public function implementations() : array;
}
