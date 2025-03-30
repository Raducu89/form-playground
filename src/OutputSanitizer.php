<?php 

declare(strict_types=1);

namespace Raducu\Form;

class OutputSanitizer
{
    /**
     * @var string $value The value to be sanitized
     */
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Sanitize the value by removing HTML tags
     *
     * @return self
     */
    public function escape(): self
    {
        $this->value = htmlentities($this->value);
        return $this;
    }


    /**
     * Trim the value by removing whitespace from the beginning and end
     *
     * @return self
     */
    public function trim(): self
    {
        $this->value = trim($this->value);
        return $this;
    }

    /**
     * Get the value as a string
     *
     * @return string The sanitized value
     */
    public function get(): string
    {
        return $this->value;
    }
}