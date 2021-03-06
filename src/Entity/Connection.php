<?php

declare(strict_types=1);

namespace Linio\Component\Database\Entity;

use Linio\Component\Database\Adapter\AdapterInterface;

class Connection
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * @var string
     */
    protected $driver;

    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var int
     */
    protected $weight;

    public function getAdapter(): AdapterInterface
    {
        return $this->adapter;
    }

    public function setAdapter(AdapterInterface $adapter): void
    {
        $this->adapter = $adapter;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}
