<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userID
 * @property integer $personID
 * @property integer $roleID
 * @property string $username
 * @property string $password
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Userrole $role
 * @property Person $person
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personID, roleID', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>50),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userID, personID, roleID, username, password, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'role' => array(self::BELONGS_TO, 'Userrole', 'roleID'),
			'person' => array(self::BELONGS_TO, 'Person', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userID' => 'User',
			'personID' => 'Person',
			'roleID' => 'Role',
			'username' => 'Username',
			'password' => 'Password',
			'dateadded' => 'Dateadded',
			'datemodified' => 'Datemodified',
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

		$criteria->compare('userID',$this->userID);
		$criteria->compare('personID',$this->personID);
		$criteria->compare('roleID',$this->roleID);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}