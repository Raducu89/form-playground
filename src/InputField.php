<?php 

declare(strict_types=1);

namespace Raducu\Form;

use Raducu\Form\Contracts\FormField;

/**
 * Class InputField
 * 
 * This class represents an input field in a form.
 * It implements the FormField interface and provides a method to display the input field as HTML.
 */
class InputField implements FormField
{   
    /**
     * @var string $label The label of the input field
     */
    public string $label;

    /**
     * @var string $name The name of the input field
     */
    public string $name;

    /**
     * @var string $value The value of the input field
     */
    public string $value;

    /**
     * @var string $type The type of the input field (text, password, email, etc.)
     */
    public string $type;

    /**
     * Constructor to initialize the input field properties
     * 
     * @param string $label The label of the input field
     * @param string $name The name of the input field
     * @param string $value The value of the input field (default is an empty string)
     * @param string $type The type of the input field (default is 'text')
     */
    public function __construct(string $label, string $name, string $value = '', string $type = 'text')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * Method to display the input field as HTML
     * 
     * @return string The HTML representation of the input field
     */
    public function display(): string
    {
        return sprintf('<div>
                <label>%s</label><br>
                <input type="%s" name="%s" value="%s">
            </div>', $this->label, $this->type, $this->name, $this->value);
    }
}