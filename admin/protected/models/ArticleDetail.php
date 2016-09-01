<?php

/**
 * This is the model class for table "article_detail".
 *
 * The followings are the available columns in table 'article_detail':
 * @property integer $id
 * @property integer $article_id
 * @property string $marathi_content
 * @property string $english_content
 * @property string $thumbnail1
 * @property string $thumbnail2
 * @property string $thumbnail3
 * @property string $thumbnail4
 * @property string $date_added
 * @property string $date_modfied
 */
class ArticleDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'article_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('article_id, marathi_content, english_content, thumbnail1, thumbnail2, thumbnail3, thumbnail4, date_added, date_modfied', 'required'),
			array('article_id', 'numerical', 'integerOnly'=>true),
			array('thumbnail1, thumbnail2, thumbnail3, thumbnail4', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, article_id, marathi_content, english_content, thumbnail1, thumbnail2, thumbnail3, thumbnail4, date_added, date_modfied', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'article_id' => 'Article',
			'marathi_content' => 'Marathi Content',
			'english_content' => 'English Content',
			'thumbnail1' => 'Thumbnail1',
			'thumbnail2' => 'Thumbnail2',
			'thumbnail3' => 'Thumbnail3',
			'thumbnail4' => 'Thumbnail4',
			'date_added' => 'Date Added',
			'date_modfied' => 'Date Modfied',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('marathi_content',$this->marathi_content,true);
		$criteria->compare('english_content',$this->english_content,true);
		$criteria->compare('thumbnail1',$this->thumbnail1,true);
		$criteria->compare('thumbnail2',$this->thumbnail2,true);
		$criteria->compare('thumbnail3',$this->thumbnail3,true);
		$criteria->compare('thumbnail4',$this->thumbnail4,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modfied',$this->date_modfied,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticleDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
