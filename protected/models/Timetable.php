<?php

/**
 * This is the model class for table "timetable".
 *
 * The followings are the available columns in table 'timetable':
 * @property integer $timetableID
 * @property integer $academicsessionID
 * @property integer $classID
 * @property integer $staffID
 * @property integer $subjectID
 * @property integer $periodID
 * @property string $dateadded
 *
 * The followings are the available model relations:
 * @property Academicsession $academicsession
 * @property Classroom $class
 * @property Staff $staff
 * @property Subject $subject
 * @property Classperiod $period
 */
class Timetable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Timetable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'timetable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('academicsessionID, classID, staffID, subjectID, periodID', 'numerical', 'integerOnly'=>true),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('timetableID, academicsessionID, classID, staffID, subjectID, periodID, dateadded', 'safe', 'on'=>'search'),
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
			'academicsession' => array(self::BELONGS_TO, 'Academicsession', 'academicsessionID'),
			'class' => array(self::BELONGS_TO, 'Classroom', 'classID'),
			'staff' => array(self::BELONGS_TO, 'Staff', 'staffID'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subjectID'),
			'period' => array(self::BELONGS_TO, 'Classperiod', 'periodID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'timetableID' => 'Timetable',
			'academicsessionID' => 'Academicsession',
			'classID' => 'Class',
			'staffID' => 'Staff',
			'subjectID' => 'Subject',
			'periodID' => 'Period',
			'dateadded' => 'Dateadded',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('timetableID',$this->timetableID);
		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('classID',$this->classID);
		$criteria->compare('staffID',$this->staffID);
		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('periodID',$this->periodID);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}