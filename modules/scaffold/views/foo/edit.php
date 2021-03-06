<?php /* @var $this yii\web\View */ ?>
<?php /** @var $model scaffold\models\Foo */ ?>
<?php $this->title = 'Edit @foo'; ?>

<div class="page-header">
    <h1>Edit @foo</h1>
</div>

<form class="form-horizontal" action="<?= \yii\helpers\Url::toRoute( [ '/scaffold/foo/edit' ] ); ?>" method="post">

    <input type="hidden" name="_csrf">
    <input type="hidden" name="id" value="<?= \yii\helpers\Html::encode( $model->id ); ?>">

    <div class="row">

        <div class="col-md-8">

            <div class="form-group">

                <label for="inputField1" class="col-sm-2 control-label">@one</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField1" class="form-control" id="inputField1" placeholder="@one">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField2" class="col-sm-2 control-label">@two</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField2" class="form-control" id="inputField2" placeholder="@two">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField3" class="col-sm-2 control-label">@three</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField3" class="form-control" id="inputField3" placeholder="@three">
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="pull-left"></div>

                    <div class="pull-right">

                        <input type="submit" name="editSubmitCancel" class="btn btn-default" value="Cancel">
                        <input type="submit" name="editSubmitSave" class="btn btn-primary" value="Save">

                    </div>

                </div>

            </div>

        </div>

    </div>

</form>