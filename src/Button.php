<?php 

declare(strict_types=1);

namespace Raducu\Form;

use Raducu\Form\Contracts\FormField;

/**
 * Class Button
 * 
 * This class represents a button in a form.
 * It implements the FormField interface and provides a method to display the button as HTML.
 */
class Button implements FormField
{   
    /**
     * @var string $text The text displayed on the button
     */
    public string $text;

    /**
     * @var string $type The type of the button (button, submit, reset)
     */
    public string $type;

    /**
     * Constructor to initialize the button properties
     * 
     * @param string $text The text displayed on the button
     * @param string $type The type of the button (default is 'button')
     */
    public function __construct(string $text, string $type = 'button')
    {
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Method to display the button as HTML
     * 
     * @return string The HTML representation of the button
     */
    public function display(): string
    {
        return sprintf('<button type="%s">%s</button>', $this->type, $this->text);
    }
}