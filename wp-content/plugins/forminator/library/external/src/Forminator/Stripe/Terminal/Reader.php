<?php

namespace Forminator\Stripe\Terminal;

/**
 * Class Reader
 *
 * @property string $id
 * @property string $object
 * @property string $device_type
 * @property string $serial_number
 * @property string $label
 * @property string $ip_address
 *
 * @package Forminator\Stripe\Terminal
 */
class Reader extends \Forminator\Stripe\ApiResource
{
    const OBJECT_NAME = "terminal.reader";

    use \Forminator\Stripe\ApiOperations\All;
    use \Forminator\Stripe\ApiOperations\Create;
    use \Forminator\Stripe\ApiOperations\Retrieve;
    use \Forminator\Stripe\ApiOperations\Update;
}
