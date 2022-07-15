<?php declare(strict_types=1);

class Author
{
    public function __construct(
        private string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}
