<?php

declare(strict_types=1);

namespace naftalimurgor\Bitgesell\Responses;

use naftalimurgor\Bitgesell\Traits\Collection;
use naftalimurgor\Bitgesell\Traits\ImmutableArray;
use naftalimurgor\Bitgesell\Traits\SerializableContainer;

class BitgeselldResponse extends Response implements
    \ArrayAccess,
    \Countable,
    \JsonSerializable
{
    use Collection;
    use ImmutableArray;
    use SerializableContainer;

    /**
     * Gets array representation of response object.
     *
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this->result();
    }

    /**
     * Gets root container of response object.
     *
     * @return array
     */
    public function toContainer(): array
    {
        return $this->container;
    }
}
