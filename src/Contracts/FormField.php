<?php 

namespace Raducu\Form\Contracts;

/**
 * Interface FormField
 * 
 * This interface defines the contract for form field classes.
 * Each form field class must implement the display method to render the field as HTML.
 */
interface FormField
{   
    /**
     * Method to display the form field as HTML
     * 
     * @return string The HTML representation of the form field
     */
    public function display(): string;
}