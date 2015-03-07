<?php

/**
 * @license Apache 2.0
 */

namespace Swagger\Annotations;

/**
 * @Annotation
 */
class Put extends Operation {

    public $method = 'put';

    /** @inheritdoc */
    public static $_parents = [
        'Swagger\Annotations\Path',
        'Swagger\Annotations\Swagger'
    ];
}