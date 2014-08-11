<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $studentID
 * @property integer $academicsessionID
 * @property integer $classID
 * @property integer $dormID
 * @property string $adminno
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $citizenship
 * @property string $parentname
 * @property string $photoimage
 * @property integer $emergencynumber
 * @property string $postaladress
 * @property string $email
 * @property string $admindate
 * @property string $gender
 * @property string $religion
 *
 * The followings are the available model relations:
 * @property Examrecord[] $examrecords
 * @property Feereceipt[] $feereceipts
 * @property Feestructure[] $feestructures
 * @property Parents[] $parents
 * @property Person[] $people
 * @property Classroom $class
 * @property Academicsession $academicsession
 * @property Dormroom $dorm
 * @property Studentsubjectplan[] $studentsubjectplans
 * @property Transportation[] $transportations
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adminno, firstname, dateofbirth, parentname, emergencynumber, admindate', 'required'),
			array('academicsessionID, classID, dormID, emergencynumber', 'numerical', 'integerOnly'=>true),
			array('adminno, firstname, middlename, lastname, citizenship, parentname, gender', 'length', 'max'=>33),
			array('photoimage', 'length', 'max'=>100),
			array('postaladress, email, religion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, academicsessionID, classID, dormID, adminno, firstname, middlename, lastname, dateofbirth, citizenship, parentname, photoimage, emergencynumber, postaladress, email, admindate, gender, religion', 'safe', 'on'=>'search'),
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
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'studentID'),
			'feereceipts' => array(self::HAS_MANY, 'Feereceipt', 'studentID'),
			'feestructures' => array(self::HAS_MANY, 'Feestructure', 'studentID'),
			'parents' => array(self::HAS_MANY, 'Parents', 'studentID'),
			'people' => array(self::HAS_MANY, 'Person', 'studentID'),
			'class' => array(self::BELONGS_TO, 'Classroom', 'classID'),
			'academicsession' => array(self::BELONGS_TO, 'Academicsession', 'academicsessionID'),
			'dorm' => array(self::BELONGS_TO, 'Dormroom', 'dormID'),
			'studentsubjectplans' => array(self::HAS_MANY, 'Studentsubjectplan', 'studentID'),
			'transportations' => array(self::HAS_MANY, 'Transportation', 'studentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studentID' => 'Student',
			'academicsessionID' => 'Academicsession',
			'classID' => 'Class',
			'dormID' => 'Dorm',
			'adminno' => 'Adminno',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'dateofbirth' => 'Dateofbirth',
			'citizenship' => 'Citizenship',
			'parentname' => 'Parentname',
			'photoimage' => 'Photoimage',
			'emergencynumber' => 'Emergencynumber',
			'postaladress' => 'Postaladress',
			'email' => 'Email',
			'admindate' => 'Admindate',
			'gender' => 'Gender',
			'religion' => 'Religion',
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

		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('classID',$this->classID);
		$criteria->compare('dormID',$this->dormID);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('parentname',$this->parentname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('emergencynumber',$this->emergencynumber);
		$criteria->compare('postaladress',$this->postaladress,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('admindate',$this->admindate,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('religion',$this->religion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}