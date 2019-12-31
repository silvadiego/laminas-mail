<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Storage\Part\Exception;

use Laminas\Mail\Storage\Exception;

/**
 * Exception for Laminas_Mail component.
 */
class RuntimeException extends Exception\RuntimeException implements
    ExceptionInterface
{}
