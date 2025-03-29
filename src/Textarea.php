<?php 

namespace Raducu\Form;

use Raducu\Form\Contracts\FormField;

/**
 * Class Textarea
 * 
 * This class represents a textarea field in a form.
 * It implements the FormField interface and provides a method to display the textarea field as HTML.
 */
class Textarea implements FormField
{
    /**
     * @var string $label The label of the textarea field
     */
    public string $label;

    /**
     * @var string $name The name of the textarea field
     */
    public string $name;

    /**
     * @var string $value The value of the textarea field
     */
    public string $value;

    /**
     * Constructor to initialize the textarea field properties
     * 
     * @param string $label The label of the textarea field
     * @param string $name The name of the textarea field
     * @param string $value The value of the textarea field (default is an empty string)
     */
    public function __construct(string $label, string $name, string $value = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Method to display the textarea field as HTML
     * 
     * @return string The HTML representation of the textarea field
     */
    public function display(): string
    {
        return sprintf('
            <div>
                <label>%s</label><br>
                <textarea name="%s">%s</textarea>
            </div>'
            , $this->label, $this->name, $this->value);
    }
}