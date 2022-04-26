<?php

use ramit\phpmvc\form\Form;
use app\models\User;

/**
 * @var $model User
 */

?>

<h1>Create an account</h1>

<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'firstname'); ?>
<?php echo $form->field($model, 'lastname'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
<button type="submit">Submit</button>
<?php Form::end(); ?>