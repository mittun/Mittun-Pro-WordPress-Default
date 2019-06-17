<?php

namespace Forminator\Stripe\Terminal;

/**
 * Class Location
 *
 * @property string $id
 * @property string $object
 * @property string $display_name
 * @property string $address_city
 * @property string $address_country
 * @property string $address_line1
 * @property string $address_line2
 * @property string $address_state
 * @property string $address_postal_code
 *
 * @package Forminator\Stripe\Terminal
 */
class Location extends \Forminator\Stripe\ApiResource
{
    const OBJECT_NAME = "terminal.location";

    use \Forminator\Stripe\ApiOperations\All;
    use \Forminator\Stripe\ApiOperations\Create;
    use \Forminator\Stripe\ApiOperations\Retrieve;
    use \Forminator\Stripe\ApiOperations\Update;
}
