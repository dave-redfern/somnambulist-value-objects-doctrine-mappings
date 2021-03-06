<?php

namespace Somnambulist\Tests\Entities\ValueObjects;

use Somnambulist\ValueObjects\AbstractValueObject;
use Somnambulist\ValueObjects\Types\Geography\Country;
use Somnambulist\ValueObjects\Types\Identity\EmailAddress;

/**
 * Class Purchaser
 *
 */
class Purchaser extends AbstractValueObject
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var EmailAddress
     */
    private $email;

    /**
     * @var Country
     */
    private $country;

    /**
     * Constructor.
     *
     * @param              $name
     * @param EmailAddress $email
     * @param Country      $country
     */
    public function __construct($name, EmailAddress $email, Country $country)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return EmailAddress
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return Country
     */
    public function country()
    {
        return $this->country;
    }
}
