<?php

namespace app\controllers;

use app\models\Tags;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "no-layout";
        $csvFile1 = 'csv/Top_tags_1.csv';
        $csvFile2 = 'csv/Top_tags_2.csv';
        $csvFile3 = 'csv/Top_tags_3.csv';
        $handle = fopen($csvFile1, "r");
        $first = true;
        $tags1[] = array();
        $size = 20;
        $i = 0;
        while (($fileop = fgetcsv($handle, 1000, ",")) !== false) {
            if ($i == $size) {
                break;
            }
            if ($first) {
                $first = false;
                continue;
            }
            if (empty($fileop[0]) || empty($fileop[1])) {
                $size++;
                continue;
            }
            $genre = str_replace(' ', '', $fileop[0]);
            $count = str_replace(' ', '', $fileop[1]);
            $tags1[$i]['genre'] = $genre;
            $tags1[$i]['count'] = $count;
            $i++;
        }
        $handle = fopen($csvFile2, "r");
        $first = true;
        $tags2[] = array();
        $size = 20;
        $i = 0;
        while (($fileop = fgetcsv($handle, 1000, ",")) !== false) {
            if ($i == $size) {
                break;
            }
            if ($first) {
                $first = false;
                continue;
            }
            if (empty($fileop[0]) || empty($fileop[1])) {
                $size++;
                continue;
            }
            $genre = str_replace(' ', '', $fileop[0]);
            $count = str_replace(' ', '', $fileop[1]);
            $tags2[$i]['genre'] = $genre;
            $tags2[$i]['count'] = $count;
            $i++;
        }

        $handle = fopen($csvFile3, "r");
        $first = true;
        $tags3[] = array();
        $size = 20;
        $i = 0;
        while (($fileop = fgetcsv($handle, 1000, ",")) !== false) {
            if ($i == $size) {
                break;
            }
            if ($first) {
                $first = false;
                continue;
            }
            if (empty($fileop[0]) || empty($fileop[1])) {
                $size++;
                continue;
            }
            $genre = str_replace(' ', '', $fileop[0]);
            $count = str_replace(' ', '', $fileop[1]);
            $tags3[$i]['genre'] = $genre;
            $tags3[$i]['count'] = $count;
            $i++;
        }

        return $this->render('index', [
                'tags1' => $tags1,
                'tags2' => $tags2,
                'tags3' => $tags3
            ]
        );
    }

    public function actionImport()
    {
        $this->layout = "no-layout";
        $model = new Tags();

        if (Yii::$app->request->isPost) {
            $model->csvFiles = UploadedFile::getInstances($model, 'csvFiles');
            foreach ($model->csvFiles as $file) {
                $file->saveAs(Yii::$app->basePath . '/csv/' . $file->baseName . '.' . $file->extension);
            }
            return $this->redirect(['index']);
        }

        return $this->render('tags', [
            'model' => $model,
        ]);
    }
}
