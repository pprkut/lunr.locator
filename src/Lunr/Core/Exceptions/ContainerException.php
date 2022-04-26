<?php

/**
 * This file contains an exception to throw when the ServiceLocator can't fulfil a request.
 *
 * @package    Lunr\Core
 * @author     Sean Molenaar <s.molenaar@m2mobi.com>
 * @copyright  2020, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Core\Exceptions;

use Exception;
use Psr\Container\ContainerExceptionInterface;

/**
 * Exception for container issues
 */
class ContainerException extends Exception implements ContainerExceptionInterface
{

}
