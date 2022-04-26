<?php

/** @var $this ramit\phpmvc\View */
/** @var $model app\models/ContactForm */

use ramit\phpmvc\form\Form;
use ramit\phpmvc\form\TextareaField;

$this->title = "Contact";

?>

<h1>Contact us</h1>

<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit">Submit</button>
<?php Form::end(); ?>