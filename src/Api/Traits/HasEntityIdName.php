<?php

namespace seregazhuk\PinterestBot\Api\Traits;

/**
 * Trait HasEntityIdName
 * @package seregazhuk\PinterestBot\Api\Traits
 */
trait HasEntityIdName
{
    /**
     * @return string
     */
    abstract public function getEntityIdName();
}