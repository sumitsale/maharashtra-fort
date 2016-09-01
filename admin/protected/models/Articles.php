<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $id
 * @property string $thumbnail_popular
 * @property string $thumbnail_recent
 * @property string $name
 * @property string $status
 * @property string $donation
 * @property string $donaton_out_off
 * @property string $date
 * @property string $state
 * @property string $district
 * @property string $date_added
 * @property string $date_modfied
 */
class Articles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('thumbnail_popular, thumbnail_recent, name, status, donation, donaton_out_off, date, state, district, date_added, date_modfied', 'required'),
			array('thumbnail_popular, thumbnail_recent, state, district', 'length', 'max'=>512),
			array('name', 'length', 'max'=>1000),
			array('status, donation, donaton_out_off', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, thumbnail_popular, thumbnail_recent, name, status, donation, donaton_out_off, date, state, district, date_added, date_modfied', 'safe', 'on'=>'search'),
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
			'thumbnail_popular' => 'Thumbnail Popular',
			'thumbnail_recent' => 'Thumbnail Recent',
			'name' => 'Name',
			'status' => 'Status',
			'donation' => 'Donation',
			'donaton_out_off' => 'Donaton Out Off',
			'date' => 'Date',
			'state' => 'State',
			'district' => 'District',
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
		$criteria->compare('thumbnail_popular',$this->thumbnail_popular,true);
		$criteria->compare('thumbnail_recent',$this->thumbnail_recent,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('donation',$this->donation,true);
		$criteria->compare('donaton_out_off',$this->donaton_out_off,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_modfied',$this->date_modfied,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                        'defaultOrder'=>'id desc',
                    )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
