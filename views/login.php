<?php

use ramit\phpmvc\form\Form;
use app\models\User;

/**
 * @var $model User
 */
?>

<h1>Login</h1>

<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<button type="submit">Submit</button>
<?php Form::end(); ?>