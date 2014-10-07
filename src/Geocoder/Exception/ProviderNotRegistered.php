<?php

/**
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Exception;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
class ProviderNotRegistered extends RuntimeException implements Exception
{
    public function __construct($providerName)
    {
        parent::__construct(sprintf('Provider "%s" is not registered, so you cannot use it. Did you forget to register it or made a typo?', $providerName));
    }
}
