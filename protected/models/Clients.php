<?php
/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property integer $id_manager
 * @property string $first_name
 * @property string $second_name
 * @property string $last_name
 * @property string $purpose
 * @property string $birth_date
 * @property string $address
 * @property string $post_index
 */
class Clients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_manager, first_name, second_name, last_name, purpose, birth_date, address, post_index', 'required'),
			array('id_manager, post_index', 'numerical', 'integerOnly'=>true),
			array('first_name, second_name, last_name, birth_date, address, post_index', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_manager, first_name, second_name, last_name, purpose, birth_date, address, post_index', 'safe', 'on'=>'search'),
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
			'id_manager' => 'Id Менеджера',
			'first_name' => 'Имя',
			'second_name' => 'Фамилия',
			'last_name' => 'Last Name',
			'purpose' => 'Purpose',
			'birth_date' => 'День рождения',
			'address' => 'Адрес',
			'post_index' => 'Пост Иденкс',
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
		$criteria->compare('id_manager',$this->id_manager);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('post_index',$this->post_index,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
