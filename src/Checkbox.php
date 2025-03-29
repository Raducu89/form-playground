<?php 

namespace Raducu\Form;

use Raducu\Form\Contracts\FormField;

/**
 * Class Checkbox
 * 
 * This class represents a checkbox field in a form.
 * It implements the FormField interface and provides a method to display the checkbox field as HTML.
 */
class Checkbox implements FormField
{
    /**
     * @var string $label The label of the checkbox field
     */
    public string $label;

    /**
     * @var string $name The name of the checkbox field
     */
    public string $name;

    /**
     * @var string $value The value of the checkbox field
     */
    public string $value;
    
    /**
     * Constructor to initialize the checkbox field properties
     * 
     * @param string $label The label of the checkbox field
     * @param string $name The name of the checkbox field
     * @param string $value The value of the checkbox field (default is 0)
     */
    public function __construct(string $label, string $name, string $value = '0')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Method to display the checkbox field as HTML
     * 
     * @return string The HTML representation of the checkbox field
     */
    public function display(): string
    {
        return sprintf('<div>
            <label>%s</label><br>
            <input type="checkbox" name="%s" value="%s" />
        </div>', $this->label, $this->name, $this->value);
    }
}