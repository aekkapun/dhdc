<?php

namespace frontend\controllers;

class SosController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPerson_age() {//คำนวนอายุประชากร
        $bdg_date = '2014-09-30';
        $sql = "select  dh.hoscode as hospcode,concat(dh.provcode,dh.distcode,dh.subdistcode,dh.mu) as areacode,dh.hosname as hospname ,sum(if(p.sex=1  and p.birth between date_add(date_sub($bdg_date,interval '1' year),interval '1' day) and date_sub($bdg_date,interval '0' year),1,0)) as am00,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '1' year),interval '1' day) and date_sub($bdg_date,interval '0' year),1,0)) as af00  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '2' year),interval '1' day) and date_sub($bdg_date,interval '1' year),1,0)) as am01,    sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '2' year),interval '1' day) and date_sub($bdg_date,interval '1' year),1,0)) as af01      ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '3' year),interval '1' day) and date_sub($bdg_date,interval '2' year),1,0)) as am02,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '3' year),interval '1' day) and date_sub($bdg_date,interval '2' year),1,0)) as af02  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '4' year),interval '1' day) and date_sub($bdg_date,interval '3' year),1,0)) as am03,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '4' year),interval '1' day) and date_sub($bdg_date,interval '3' year),1,0)) as af03 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '5' year),interval '1' day) and date_sub($bdg_date,interval '4' year),1,0)) as am04,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '5' year),interval '1' day) and date_sub($bdg_date,interval '4' year),1,0)) as af04   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '6' year),interval '1' day) and date_sub($bdg_date,interval '5' year),1,0)) as am05,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '6' year),interval '1' day) and date_sub($bdg_date,interval '5' year),1,0)) as af05  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '7' year),interval '1' day) and date_sub($bdg_date,interval '6' year),1,0)) as am06,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '7' year),interval '1' day) and date_sub($bdg_date,interval '6' year),1,0)) as af06  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '8' year),interval '1' day) and date_sub($bdg_date,interval '7' year),1,0)) as am07,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '8' year),interval '1' day) and date_sub($bdg_date,interval '7' year),1,0)) as af07  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '9' year),interval '1' day) and date_sub($bdg_date,interval '8' year),1,0)) as am08, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '9' year),interval '1' day) and date_sub($bdg_date,interval '8' year),1,0)) as af08  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '10' year),interval '1' day) and date_sub($bdg_date,interval '9' year),1,0)) as am09,  sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '10' year),interval '1' day) and date_sub($bdg_date,interval '9' year),1,0)) as af09  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '11' year),interval '1' day) and date_sub($bdg_date,interval '10' year),1,0)) as am10, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '11' year),interval '1' day) and date_sub($bdg_date,interval '10' year),1,0)) as af10  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '12' year),interval '1' day) and date_sub($bdg_date,interval '11' year),1,0)) as am11, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '12' year),interval '1' day) and date_sub($bdg_date,interval '11' year),1,0)) as af11  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '13' year),interval '1' day) and date_sub($bdg_date,interval '12' year),1,0)) as am12,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '13' year),interval '1' day) and date_sub($bdg_date,interval '12' year),1,0)) as af12  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '14' year),interval '1' day) and date_sub($bdg_date,interval '13' year),1,0)) as am13,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '14' year),interval '1' day) and date_sub($bdg_date,interval '13' year),1,0)) as af13  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '15' year),interval '1' day) and date_sub($bdg_date,interval '14' year),1,0)) as am14,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '15' year),interval '1' day) and date_sub($bdg_date,interval '14' year),1,0)) as af14  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '16' year),interval '1' day) and date_sub($bdg_date,interval '15' year),1,0)) as am15, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '16' year),interval '1' day) and date_sub($bdg_date,interval '15' year),1,0)) as af15  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '17' year),interval '1' day) and date_sub($bdg_date,interval '16' year),1,0)) as am16, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '17' year),interval '1' day) and date_sub($bdg_date,interval '16' year),1,0)) as af16  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '18' year),interval '1' day) and date_sub($bdg_date,interval '17' year),1,0)) as am17, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '18' year),interval '1' day) and date_sub($bdg_date,interval '17' year),1,0)) as af17 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '19' year),interval '1' day) and date_sub($bdg_date,interval '18' year),1,0)) as am18, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '19' year),interval '1' day) and date_sub($bdg_date,interval '18' year),1,0)) as af18  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '20' year),interval '1' day) and date_sub($bdg_date,interval '19' year),1,0)) as am19, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '20' year),interval '1' day) and date_sub($bdg_date,interval '19' year),1,0)) as af19 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '21' year),interval '1' day) and date_sub($bdg_date,interval '20' year),1,0)) as am20,  sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '21' year),interval '1' day) and date_sub($bdg_date,interval '20' year),1,0)) as af20  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '22' year),interval '1' day) and date_sub($bdg_date,interval '21' year),1,0)) as am21, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '22' year),interval '1' day) and date_sub($bdg_date,interval '21' year),1,0)) as af21  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '23' year),interval '1' day) and date_sub($bdg_date,interval '22' year),1,0)) as am22, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '23' year),interval '1' day) and date_sub($bdg_date,interval '22' year),1,0)) as af22  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '24' year),interval '1' day) and date_sub($bdg_date,interval '23' year),1,0)) as am23,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '24' year),interval '1' day) and date_sub($bdg_date,interval '23' year),1,0)) as af23  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '25' year),interval '1' day) and date_sub($bdg_date,interval '24' year),1,0)) as am24, sum(if(p.sex=2  and p.birth   between date_add(date_sub($bdg_date,interval '25' year),interval '1' day) and date_sub($bdg_date,interval '24' year),1,0)) as af24  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '26' year),interval '1' day) and date_sub($bdg_date,interval '25' year),1,0)) as am25,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '26' year),interval '1' day) and date_sub($bdg_date,interval '25' year),1,0)) as af25  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '27' year),interval '1' day) and date_sub($bdg_date,interval '26' year),1,0)) as am26,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '27' year),interval '1' day) and date_sub($bdg_date,interval '26' year),1,0)) as af26  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '28' year),interval '1' day) and date_sub($bdg_date,interval '27' year),1,0)) as am27,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '28' year),interval '1' day) and date_sub($bdg_date,interval '27' year),1,0)) as af27  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '29' year),interval '1' day) and date_sub($bdg_date,interval '28' year),1,0)) as am28,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '29' year),interval '1' day) and date_sub($bdg_date,interval '28' year),1,0)) as af28  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '30' year),interval '1' day) and date_sub($bdg_date,interval '29' year),1,0)) as am29,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '30' year),interval '1' day) and date_sub($bdg_date,interval '29' year),1,0)) as af29  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '31' year),interval '1' day) and date_sub($bdg_date,interval '30' year),1,0)) as am30,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '31' year),interval '1' day) and date_sub($bdg_date,interval '30' year),1,0)) as af30  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '32' year),interval '1' day) and date_sub($bdg_date,interval '31' year),1,0)) as am31,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '32' year),interval '1' day) and date_sub($bdg_date,interval '31' year),1,0)) as af31  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '33' year),interval '1' day) and date_sub($bdg_date,interval '32' year),1,0)) as am32,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '33' year),interval '1' day) and date_sub($bdg_date,interval '32' year),1,0)) as af32  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '34' year),interval '1' day) and date_sub($bdg_date,interval '33' year),1,0)) as am33,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '34' year),interval '1' day) and date_sub($bdg_date,interval '33' year),1,0)) as af33  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '35' year),interval '1' day) and date_sub($bdg_date,interval '34' year),1,0)) as am34,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '35' year),interval '1' day) and date_sub($bdg_date,interval '34' year),1,0)) as af34  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '36' year),interval '1' day) and date_sub($bdg_date,interval '35' year),1,0)) as am35,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '36' year),interval '1' day) and date_sub($bdg_date,interval '35' year),1,0)) as af35  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '37' year),interval '1' day) and date_sub($bdg_date,interval '36' year),1,0)) as am36,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '37' year),interval '1' day) and date_sub($bdg_date,interval '36' year),1,0)) as af36  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '38' year),interval '1' day) and date_sub($bdg_date,interval '37' year),1,0)) as am37,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '38' year),interval '1' day) and date_sub($bdg_date,interval '37' year),1,0)) as af37  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '39' year),interval '1' day) and date_sub($bdg_date,interval '38' year),1,0)) as am38,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '39' year),interval '1' day) and date_sub($bdg_date,interval '38' year),1,0)) as af38  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '40' year),interval '1' day) and date_sub($bdg_date,interval '39' year),1,0)) as am39,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '40' year),interval '1' day) and date_sub($bdg_date,interval '39' year),1,0)) as af39  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '41' year),interval '1' day) and date_sub($bdg_date,interval '40' year),1,0)) as am40,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '41' year),interval '1' day) and date_sub($bdg_date,interval '40' year),1,0)) as af40  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '42' year),interval '1' day) and date_sub($bdg_date,interval '41' year),1,0)) as am41,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '42' year),interval '1' day) and date_sub($bdg_date,interval '41' year),1,0)) as af41   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '43' year),interval '1' day) and date_sub($bdg_date,interval '42' year),1,0)) as am42,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '43' year),interval '1' day) and date_sub($bdg_date,interval '42' year),1,0)) as af42  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '44' year),interval '1' day) and date_sub($bdg_date,interval '43' year),1,0)) as am43,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '44' year),interval '1' day) and date_sub($bdg_date,interval '43' year),1,0)) as af43  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '45' year),interval '1' day) and date_sub($bdg_date,interval '44' year),1,0)) as am44,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '45' year),interval '1' day) and date_sub($bdg_date,interval '44' year),1,0)) as af44   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '46' year),interval '1' day) and date_sub($bdg_date,interval '45' year),1,0)) as am45,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '46' year),interval '1' day) and date_sub($bdg_date,interval '45' year),1,0)) as af45  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '47' year),interval '1' day) and date_sub($bdg_date,interval '46' year),1,0)) as am46,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '47' year),interval '1' day) and date_sub($bdg_date,interval '46' year),1,0)) as af46  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '48' year),interval '1' day) and date_sub($bdg_date,interval '47' year),1,0)) as am47,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '48' year),interval '1' day) and date_sub($bdg_date,interval '47' year),1,0)) as af47  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '49' year),interval '1' day) and date_sub($bdg_date,interval '48' year),1,0)) as am48,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '49' year),interval '1' day) and date_sub($bdg_date,interval '48' year),1,0)) as af48 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '50' year),interval '1' day) and date_sub($bdg_date,interval '49' year),1,0)) as am49,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '50' year),interval '1' day) and date_sub($bdg_date,interval '49' year),1,0)) as af49   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '51' year),interval '1' day) and date_sub($bdg_date,interval '50' year),1,0)) as am50,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '51' year),interval '1' day) and date_sub($bdg_date,interval '50' year),1,0)) as af50  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '52' year),interval '1' day) and date_sub($bdg_date,interval '51' year),1,0)) as am51,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '52' year),interval '1' day) and date_sub($bdg_date,interval '51' year),1,0)) as af51   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '53' year),interval '1' day) and date_sub($bdg_date,interval '52' year),1,0)) as am52,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '53' year),interval '1' day) and date_sub($bdg_date,interval '52' year),1,0)) as af52  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '54' year),interval '1' day) and date_sub($bdg_date,interval '53' year),1,0)) as am53,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '54' year),interval '1' day) and date_sub($bdg_date,interval '53' year),1,0)) as af53  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '55' year),interval '1' day) and date_sub($bdg_date,interval '54' year),1,0)) as am54,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '55' year),interval '1' day) and date_sub($bdg_date,interval '54' year),1,0)) as af54  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '56' year),interval '1' day) and date_sub($bdg_date,interval '55' year),1,0)) as am55,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '56' year),interval '1' day) and date_sub($bdg_date,interval '55' year),1,0)) as af55   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '57' year),interval '1' day) and date_sub($bdg_date,interval '56' year),1,0)) as am56,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '57' year),interval '1' day) and date_sub($bdg_date,interval '56' year),1,0)) as af56  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '58' year),interval '1' day) and date_sub($bdg_date,interval '57' year),1,0)) as am57,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '58' year),interval '1' day) and date_sub($bdg_date,interval '57' year),1,0)) as af57 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '59' year),interval '1' day) and date_sub($bdg_date,interval '58' year),1,0)) as am58,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '59' year),interval '1' day) and date_sub($bdg_date,interval '58' year),1,0)) as af58  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '60' year),interval '1' day) and date_sub($bdg_date,interval '59' year),1,0)) as am59,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '60' year),interval '1' day) and date_sub($bdg_date,interval '59' year),1,0)) as af59  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '61' year),interval '1' day) and date_sub($bdg_date,interval '60' year),1,0)) as am60,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '61' year),interval '1' day) and date_sub($bdg_date,interval '60' year),1,0)) as af60  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '62' year),interval '1' day) and date_sub($bdg_date,interval '61' year),1,0)) as am61,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '62' year),interval '1' day) and date_sub($bdg_date,interval '61' year),1,0)) as af61  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '63' year),interval '1' day) and date_sub($bdg_date,interval '62' year),1,0)) as am62,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '63' year),interval '1' day) and date_sub($bdg_date,interval '62' year),1,0)) as af62  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '64' year),interval '1' day) and date_sub($bdg_date,interval '63' year),1,0)) as am63,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '64' year),interval '1' day) and date_sub($bdg_date,interval '63' year),1,0)) as af63  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '65' year),interval '1' day) and date_sub($bdg_date,interval '64' year),1,0)) as am64,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '65' year),interval '1' day) and date_sub($bdg_date,interval '64' year),1,0)) as af64  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '66' year),interval '1' day) and date_sub($bdg_date,interval '65' year),1,0)) as am65,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '66' year),interval '1' day) and date_sub($bdg_date,interval '65' year),1,0)) as af65   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '67' year),interval '1' day) and date_sub($bdg_date,interval '66' year),1,0)) as am66,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '67' year),interval '1' day) and date_sub($bdg_date,interval '66' year),1,0)) as af66  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '68' year),interval '1' day) and date_sub($bdg_date,interval '67' year),1,0)) as am67,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '68' year),interval '1' day) and date_sub($bdg_date,interval '67' year),1,0)) as af67   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '69' year),interval '1' day) and date_sub($bdg_date,interval '68' year),1,0)) as am68,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '69' year),interval '1' day) and date_sub($bdg_date,interval '68' year),1,0)) as af68 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '70' year),interval '1' day) and date_sub($bdg_date,interval '69' year),1,0)) as am69,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '70' year),interval '1' day) and date_sub($bdg_date,interval '69' year),1,0)) as af69   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '71' year),interval '1' day) and date_sub($bdg_date,interval '70' year),1,0)) as am70,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '71' year),interval '1' day) and date_sub($bdg_date,interval '70' year),1,0)) as af70  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '72' year),interval '1' day) and date_sub($bdg_date,interval '71' year),1,0)) as am71,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '72' year),interval '1' day) and date_sub($bdg_date,interval '71' year),1,0)) as af71  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '73' year),interval '1' day) and date_sub($bdg_date,interval '72' year),1,0)) as am72,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '73' year),interval '1' day) and date_sub($bdg_date,interval '72' year),1,0)) as af72  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '74' year),interval '1' day) and date_sub($bdg_date,interval '73' year),1,0)) as am73,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '74' year),interval '1' day) and date_sub($bdg_date,interval '73' year),1,0)) as af73  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '75' year),interval '1' day) and date_sub($bdg_date,interval '74' year),1,0)) as am74,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '75' year),interval '1' day) and date_sub($bdg_date,interval '74' year),1,0)) as af74   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '76' year),interval '1' day) and date_sub($bdg_date,interval '75' year),1,0)) as am75,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '76' year),interval '1' day) and date_sub($bdg_date,interval '75' year),1,0)) as af75  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '77' year),interval '1' day) and date_sub($bdg_date,interval '76' year),1,0)) as am76,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '77' year),interval '1' day) and date_sub($bdg_date,interval '76' year),1,0)) as af76  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '78' year),interval '1' day) and date_sub($bdg_date,interval '77' year),1,0)) as am77,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '78' year),interval '1' day) and date_sub($bdg_date,interval '77' year),1,0)) as af77  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '79' year),interval '1' day) and date_sub($bdg_date,interval '78' year),1,0)) as am78,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '79' year),interval '1' day) and date_sub($bdg_date,interval '78' year),1,0)) as af78  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '80' year),interval '1' day) and date_sub($bdg_date,interval '79' year),1,0)) as am79,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '80' year),interval '1' day) and date_sub($bdg_date,interval '79' year),1,0)) as af79  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '81' year),interval '1' day) and date_sub($bdg_date,interval '80' year),1,0)) as am80,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '81' year),interval '1' day) and date_sub($bdg_date,interval '80' year),1,0)) as af80  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '82' year),interval '1' day) and date_sub($bdg_date,interval '81' year),1,0)) as am81,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '82' year),interval '1' day) and date_sub($bdg_date,interval '81' year),1,0)) as af81  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '83' year),interval '1' day) and date_sub($bdg_date,interval '82' year),1,0)) as am82,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '83' year),interval '1' day) and date_sub($bdg_date,interval '82' year),1,0)) as af82  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '84' year),interval '1' day) and date_sub($bdg_date,interval '83' year),1,0)) as am83,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '84' year),interval '1' day) and date_sub($bdg_date,interval '83' year),1,0)) as af83   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '85' year),interval '1' day) and date_sub($bdg_date,interval '84' year),1,0)) as am84,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '85' year),interval '1' day) and date_sub($bdg_date,interval '84' year),1,0)) as af84  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '86' year),interval '1' day) and date_sub($bdg_date,interval '85' year),1,0)) as am85,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '86' year),interval '1' day) and date_sub($bdg_date,interval '85' year),1,0)) as af85  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '87' year),interval '1' day) and date_sub($bdg_date,interval '86' year),1,0)) as am86,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '87' year),interval '1' day) and date_sub($bdg_date,interval '86' year),1,0)) as af86   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '88' year),interval '1' day) and date_sub($bdg_date,interval '87' year),1,0)) as am87,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '88' year),interval '1' day) and date_sub($bdg_date,interval '87' year),1,0)) as af87  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '89' year),interval '1' day) and date_sub($bdg_date,interval '88' year),1,0)) as am88,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '89' year),interval '1' day) and date_sub($bdg_date,interval '88' year),1,0)) as af88  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '90' year),interval '1' day) and date_sub($bdg_date,interval '89' year),1,0)) as am89,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '90' year),interval '1' day) and date_sub($bdg_date,interval '89' year),1,0)) as af89   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '91' year),interval '1' day) and date_sub($bdg_date,interval '90' year),1,0)) as am90,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '91' year),interval '1' day) and date_sub($bdg_date,interval '90' year),1,0)) as af90  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '92' year),interval '1' day) and date_sub($bdg_date,interval '91' year),1,0)) as am91,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '92' year),interval '1' day) and date_sub($bdg_date,interval '91' year),1,0)) as af91 ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '93' year),interval '1' day) and date_sub($bdg_date,interval '92' year),1,0)) as am92,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '93' year),interval '1' day) and date_sub($bdg_date,interval '92' year),1,0)) as af92  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '94' year),interval '1' day) and date_sub($bdg_date,interval '93' year),1,0)) as am93,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '94' year),interval '1' day) and date_sub($bdg_date,interval '93' year),1,0)) as af93  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '95' year),interval '1' day) and date_sub($bdg_date,interval '94' year),1,0)) as am94,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '95' year),interval '1' day) and date_sub($bdg_date,interval '94' year),1,0)) as af94  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '96' year),interval '1' day) and date_sub($bdg_date,interval '95' year),1,0)) as am95, sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '96' year),interval '1' day) and date_sub($bdg_date,interval '95' year),1,0)) as af95   ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '97' year),interval '1' day) and date_sub($bdg_date,interval '96' year),1,0)) as am96,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '97' year),interval '1' day) and date_sub($bdg_date,interval '96' year),1,0)) as af96  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '98' year),interval '1' day) and date_sub($bdg_date,interval '97' year),1,0)) as am97,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '98' year),interval '1' day) and date_sub($bdg_date,interval '97' year),1,0)) as af97  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '99' year),interval '1' day) and date_sub($bdg_date,interval '98' year),1,0)) as am98,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '99' year),interval '1' day) and date_sub($bdg_date,interval '98' year),1,0)) as af98  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '100' year),interval '1' day) and date_sub($bdg_date,interval '99' year),1,0)) as am99,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '100' year),interval '1' day) and date_sub($bdg_date,interval '99' year),1,0)) as af99  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '101' year),interval '1' day) and date_sub($bdg_date,interval '100' year),1,0)) as am100,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '101' year),interval '1' day) and date_sub($bdg_date,interval '100' year),1,0)) as af100  ,sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '102' year),interval '1' day) and date_sub($bdg_date,interval '150' year),1,0)) as am100u,  sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '102' year),interval '1' day) and date_sub($bdg_date,interval '150' year),1,0)) as af100u,   sum(if(p.sex=1  and p.birth  between date_add(date_sub($bdg_date,interval '150' year),interval '1' day) and date_sub($bdg_date,interval '0' year),1,0)) as totalm,   sum(if(p.sex=2  and p.birth  between date_add(date_sub($bdg_date,interval '150' year),interval '1' day) and date_sub($bdg_date,interval '0' year),1,0)) as totalf,   sum(if(p.birth  between date_add(date_sub($bdg_date,interval '150' year),interval '1' day) and date_sub($bdg_date,interval '0' year),1,0)) as total   
from person p    
inner  join chospital_amp  dh on p.hospcode = dh.hoscode  
where  p.discharge='9'   and p.nation ='099' and p.typearea in('1','3')   
group by dh.hoscode  order by areacode,hoscode asc;";

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

        return $this->render('report1', [

                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    //'date1' => $date1,
                    //'date2' => $date2
        ]);
    }

}