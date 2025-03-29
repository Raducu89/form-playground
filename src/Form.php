<?php 

namespace Raducu\Form;

use Raducu\Form\Contracts\FormField;

/**
 * Class Form
 * 
 * This class represents a form and contains methods to add fields and display the form as HTML.
 * It implements the FormField interface, allowing it to be used as a field in a form.
 */
class Form implements FormField
{  
    /**
     * @var string
     * @description The action attribute specifies where to send the form-data when a form is submitted.
     * @example action="https://example.com/submit-form.php"
     */
    protected string $action;

    /**
     * @var string
     * @description The method attribute specifies how to send form-data (the form-data is sent to the page specified in the action attribute).
     * @example method="post"
     */
    protected string $method;

    /**
     * @var array
     * @description The fields attribute is an array of FormField objects that represent the fields in the form.
     * @example fields = [new InputField('Name', 'name'), new Textarea('Message', 'message')]
     */
    protected array $fields = [];

    /**
     * @param string $action
     * @param string $method
     * @description The constructor initializes the form with an action and method.
     * @example new Form('https://example.com/submit-form.php', 'post')
     */
    public function __construct($action, $method) 
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * @param FormField $ff
     * @description The addField method adds a FormField object to the fields array.
     * @example $form->addField(new InputField('Name', 'name'));
     */
    public function addField(FormField $ff)
    {
        $this->fields[] = $ff;
    }

    /**
     * Method to display the form as HTML
     * 
     * @return string The HTML representation of the form
     * @description The display method generates the HTML for the form, including all its fields.
     */
    public function display(): string
    {   
        $content = implode(PHP_EOL, array_map(fn($el) => $el->display(), $this->fields));

        return sprintf('<form action="%s" method="%s">%s</form>', $this->action, $this->method, $content);
    }
}