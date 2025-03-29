<?php

require 'vendor/autoload.php';

use Raducu\Form\Form;

use Raducu\Form\InputField;
use Raducu\Form\Textarea;
use Raducu\Form\Checkbox;
use Raducu\Form\Button;

// This is a simple form example using the classes defined in the src directory.
$action = '/doStuff';
$method = 'POST';

// Create a new form instance with the action and method
$form = new Form($action, $method);
$form->addField(new InputField('Input 1', 'input1', 'test value1'));
$form->addField(new InputField('Input 2', 'input2'));
$form->addField(new Textarea('Textarea', 'textarea'));
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