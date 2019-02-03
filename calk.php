<?php

$data=$_POST['data'];
$deposit_amount=$_POST['deposit_amount'];
$time_deposit=$_POST['time_deposit'];
$replenishment=$_POST['replenishment'];
$refill=$_POST['refill'];
$refill2=$_POST['refill2'];


//echo $data;
//echo $deposit_amount;
//echo $time_deposit;
//echo $replenishment;
//echo $refill; //summadd


$diff = floor((strtotime("now")-strtotime("$data"))/86400); // кол-во прошедших дней с открытия вклада и до текущего месяца.

$now = new DateTime(); // текущее время на сервере
$date = DateTime::createFromFormat('m/d/Y', $data); // датa в нужном формате
$datam = date('m/d/Y');
//echo $interval = date_diff($now,$date) . "<br>";
$interval = date_diff(new DateTime(), new DateTime( $data));
//$interval = $now->diff($date); // получаем разницу
$int =$interval->format('%y').'<br>'; // кол-во лет



    if ($int<=$time_deposit){
        //echo 'все хорошо'.'<br>';
        $god =date_format((date_create($data)), 'Y'); //год открытия вклада
        $year_gots =date('Y');//текущий год





                    $today =date('m/d/Y');//текущая дата
                    for ($d=$data,$g=$god;$g<=$year_gots;$g++){
                        $diff2+=$day_pas;

                        $d1 =date_format((date_create("12/31/$g")), "m/d/Y");//последний день текущего года
                         $day_pas =floor((strtotime($d1)-strtotime("$d"))/86400);// кол-во прошедш
                        //их дней с открытия вклада и до 31 декабря того года.

                        $year =(date('L', strtotime("$g/01/01")) ? 'Yes' : 'No');

                            if ($day_pas<=$diff){
                                if( $year == 'Yes' ){
                                    # Год високосный
                                    $daysy = 366;
                                     //'Год високосный';
                                }
                                else{
                                    # Год не високосный
                                    $daysy = 365;
                                    // 'Год не високосный';
                                }
                                //если вклад не пополняли
                                if ($replenishment=='No'){
                                    if ($diff-$diff2<365){
                                        $day_pas = $diff-$diff2;
                                        //echo $replenishment;
                                    }

                                     $summn += $deposit_amount+(10*($day_pas/$daysy));
                                    $date_new = strtotime("+$day_pas day", strtotime($d));
                                    $d = date("m/d/Y", $date_new);//дата характ. периоды когда лежит вклад
                                }else
                                    //если пополняли ежемесячно
                                    {
                                        if ($diff-$diff2<365){
                                            $day_pas = $diff-$diff2;
                                            //echo $replenishment;
                                        }
//                                    if ($diff-$diff2<365){
//                                        $day_pas = $diff-$diff2;
//                                    }

                                    $summn += $deposit_amount+(($deposit_amount+$refill)*10*($day_pas/$daysy));
                                    $date_new = strtotime("+$day_pas day", strtotime($d));
                                    $d = date("m/d/Y", $date_new);
                                    //echo $replenishment;
                                }

                            }





                    }



        if ($diff<=32){
            echo $summn = 'с момента вашего пополнения прошло меньше месяца';
        }else
            echo round($summn);

                    //'<br>'. $s;
                //}
                //else{

                //}


    }
    else
    {
        echo 'что то не так' .'<br>' ."Вы брали депозит на $time_deposit лет";
    }

//echo $sum = round($summn);
    $advert = array(
        'ajax' => $summn,
    );
json_encode($advert);

?>