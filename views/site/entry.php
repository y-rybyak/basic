<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'password_repeat')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
<?php ActiveForm::end(); ?>