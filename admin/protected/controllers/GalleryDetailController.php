<?php

class GalleryDetailController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{

		$model1=new GalleryDetail('search');
		$model1->unsetAttributes();  // clear any default values
		if(isset($_GET['GalleryDetail']))
			$model1->attributes=$_GET['GalleryDetail'];



		$model=new GalleryDetail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryDetail']))
		{
			$model->attributes=$_POST['GalleryDetail'];

			$model->thumbnail = isset($_FILES['GalleryDetail']['name']['thumbnail']) ? $_FILES['GalleryDetail']['name']['thumbnail'] : '';

			$model->date_added = date('Y-m-d H:i:s', time());
			$model->date_modifed = date('Y-m-d H:i:s', time());

			if($model->save()){

			if($model->thumbnail!='')
			{
				move_uploaded_file($_FILES['GalleryDetail']['tmp_name']['thumbnail'], Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				
			}


				$this->redirect(array('create','id'=>$model->gallery_id));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
			'model1'=>$model1,
			'id'=>$id
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$thumbnail = $model->thumbnail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryDetail']))
		{
			$model->attributes=$_POST['GalleryDetail'];

			$model->thumbnail = isset($_FILES['GalleryDetail']['name']['thumbnail']) && $_FILES['GalleryDetail']['name']['thumbnail']!='' ? $_FILES['GalleryDetail']['name']['thumbnail'] : $thumbnail;

			$model->date_modifed = date('Y-m-d H:i:s', time());

			if($model->save()){

			if($thumbnail != $model->thumbnail && $model->thumbnail!='')
			{
				move_uploaded_file($_FILES['GalleryDetail']['tmp_name']['thumbnail'], Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/gallerydetail/'. $model->thumbnail);
				
			}


				$this->redirect(array('create','id'=>$model->gallery_id));

			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('GalleryDetail');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new GalleryDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GalleryDetail']))
			$model->attributes=$_GET['GalleryDetail'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GalleryDetail the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GalleryDetail::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
   
   public function loadModel1($id)
	{
		$model=GalleryDetail::model()->findByAttributes(array('gallery_id' => $id));

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GalleryDetail $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallery-detail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
