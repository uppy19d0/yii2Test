<?php 
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
?>
<h1>Import Customer</h1>
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);?>
 
<?= $form->field($modelImport,'fileImport')->fileInput() ?>
 
<?= Html::submitButton('Import Record Customer',['class'=>'btn btn-primary']);?>
 
<?php ActiveForm::end();?>