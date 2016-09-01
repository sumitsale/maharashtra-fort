<?php

class ArticleDetailController extends Controller
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
		$model=new ArticleDetail;


		$result = Yii::app()->db->createCommand()
								->select('*')
								->from('article_detail')
								->where('article_id=:article_id', array(':article_id' => $id))
								->queryAll();


		if(count($result)>0) {


		$model=$this->loadModel($result[0]['id']);

		$thumbnail1 = $model->thumbnail1;
		$thumbnail2 = $model->thumbnail2;
		$thumbnail3 = $model->thumbnail3;
		$thumbnail4 = $model->thumbnail4;


		}
		else {


		$thumbnail1 = "";
		$thumbnail2 = "";
		$thumbnail3 = "";
		$thumbnail4 = "";

		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ArticleDetail']))
		{
			$model->attributes=$_POST['ArticleDetail'];

			$model->date_added = date("Y-m-d H::s", time());
			$model->date_modfied = date("Y-m-d H::s", time());

			$model->thumbnail1 = isset($_FILES['ArticleDetail']['name']['thumbnail1']) && $_FILES['ArticleDetail']['name']['thumbnail1']!='' ? $_FILES['ArticleDetail']['name']['thumbnail1'] : $thumbnail1;
			$model->thumbnail2 = isset($_FILES['ArticleDetail']['name']['thumbnail2']) && $_FILES['ArticleDetail']['name']['thumbnail2']!='' ? $_FILES['ArticleDetail']['name']['thumbnail2'] : $thumbnail2;
			$model->thumbnail3 = isset($_FILES['ArticleDetail']['name']['thumbnail3']) && $_FILES['ArticleDetail']['name']['thumbnail3']!='' ? $_FILES['ArticleDetail']['name']['thumbnail3'] : $thumbnail3;
			$model->thumbnail4 = isset($_FILES['ArticleDetail']['name']['thumbnail4']) && $_FILES['ArticleDetail']['name']['thumbnail4']!='' ? $_FILES['ArticleDetail']['name']['thumbnail4'] : $thumbnail4;

			if($model->save()){


			if(isset($_FILES['ArticleDetail']['name']['thumbnail1']) && $_FILES['ArticleDetail']['name']['thumbnail1']!='')
			{
				move_uploaded_file($_FILES['ArticleDetail']['tmp_name']['thumbnail1'], Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail1);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail1);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail1);
			}
			

			if(isset($_FILES['ArticleDetail']['name']['thumbnail2']) && $_FILES['ArticleDetail']['name']['thumbnail2']!='')
			{
				move_uploaded_file($_FILES['ArticleDetail']['tmp_name']['thumbnail2'], Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail2);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail2);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail2);
			}
			
			if(isset($_FILES['ArticleDetail']['name']['thumbnail3']) && $_FILES['ArticleDetail']['name']['thumbnail3']!='')
			{
				move_uploaded_file($_FILES['ArticleDetail']['tmp_name']['thumbnail3'], Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail3);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail3);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail3);
			}
			
			if(isset($_FILES['ArticleDetail']['name']['thumbnail4']) && $_FILES['ArticleDetail']['name']['thumbnail4']!='')
			{
				move_uploaded_file($_FILES['ArticleDetail']['tmp_name']['thumbnail4'], Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail4);
				
				$resize = new ResizeImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail4);
				$resize->resizeTo(500, 333, 'exact');
				$resize->saveImage(Yii::app()->basePath  . '/../images/articledetail/'. $model->thumbnail4);
			}
			
				$this->redirect(array('articles/admin'));
		
			}
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ArticleDetail']))
		{
			$model->attributes=$_POST['ArticleDetail'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('ArticleDetail');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ArticleDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ArticleDetail']))
			$model->attributes=$_GET['ArticleDetail'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ArticleDetail the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ArticleDetail::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



	public function loadModel1($id)
	{
		$model=ArticleDetail::model()->article_id(array('article_id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ArticleDetail $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-detail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
