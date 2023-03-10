<?php

/**
 * This file contains an exception to throw when the ServiceLocator can't fulfil a request.
 *
 * SPDX-FileCopyrightText: Copyright 2020 M2mobi B.V., Amsterdam, The Netherlands
 * SPDX-FileCopyrightText: Copyright 2022 Move Agency Group B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
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
