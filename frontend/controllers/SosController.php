<?php

namespace frontend\controllers;

class SosController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPyramid() {//คำนวนอายุประชากร
        
        $sql = "SELECT  SUBSTR(t.age_range,3,10) as age ,SUM(t.male) as male,SUM(t.female)as female from sys_pyramid_level_3 t
#WHERE t.hospcode ='10612'
GROUP BY t.age_range";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            //'key' => 'hoscode',
            'allModels' => $rawData,
            'pagination' => FALSE,
        ]);

        return $this->render('pyramid', [

                    'dataProvider' => $dataProvider,
                    'rawData' => $rawData,
                    //'date1' => $date1,
                    //'date2' => $date2
        ]);
    }

}
