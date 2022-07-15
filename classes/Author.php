<?php declare(strict_types=1);

class Author
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
