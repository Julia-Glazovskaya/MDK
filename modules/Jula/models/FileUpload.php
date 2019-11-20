<?php

namespace app\modules\Jula\models;

use Yii;
use yii\base\Model;
use app\modules\Jula\models\FileUpload;
use app\modules\Jula\models\uploadFile;
use yii\web\UploadedFile;
use yii\db\ActiveRecord;
use app\modules\Jula\models\Post;


class FileUpload extends Post
{
	public function rules()
 {
 return [
 // username and password are both required
 
 [['file'], 'file', 'extensions' => 'docx, xlsx', 
                    'skipOnEmpty' => false]];
 }

	public function uploadFile($file)
	{
		$this->file = $file;

		$filename = strtolower(md5(uniqid($file->baseName)) . '.' .  $file->extension);
		$file->saveAs(Yii::getAlias('uploads/' . $filename));
	
		
		return $filename;
	}
	
}