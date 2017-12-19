<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class Tags extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $csvFiles;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['csvFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv'],
        ];
    }
}
