<?php

require 'vendor/autoload.php';

use Raducu\Form\Form;

use Raducu\Form\InputField;
use Raducu\Form\Textarea;
use Raducu\Form\Checkbox;
use Raducu\Form\Button;

use Raducu\Form\OutputSanitizer;

// This is a simple form example using the classes defined in the src directory.
$action = '/doStuff';
$method = 'POST';

// Form fields values
$input1 = "test Value 1    ";
$input2 = "input 2";
$textarea = "textarea";

// Create a new form instance with the action and method
$form = new Form($action, $method);
$form->addField(new InputField('Input 1', 'input1', 
    (new OutputSanitizer($input1))->escape()->trim()->get()
));
$form->addField(new InputField('Input 2', 'input2'));
$form->addField(new Textarea('Textarea', 'textarea', $textarea));
$form->addField(new Checkbox('checkbox1', 'check1'));
$form->addField(new Button('Submit', 'submit'));

?>

<html>
    <head>
        <title>Title</title>
    </head>

    <body>
        <?php echo $form->display(); ?>
    </body>
</html>