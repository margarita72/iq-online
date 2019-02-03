<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <header class="header">
        <div id="container" class="container">
            <div class="row cap">
                <div class="col-lg-2">
                    <img src="img/630063_logo-bank-moskvy.jpg" alt="logo-bank-moskvy" class="logo">

                </div>
                <div class="col-lg-3 ml-auto phone" >
                    <div class="phone1 d-flex justify-content-center">
                        8-800-100-5005
                    </div>
                    <div class="phone2 d-flex justify-content-center">
                        +7[3452]522-000
                    </div>
                </div>
            </div>
                <div class="menu">

                    <nav>
                        <ul class="d-flex justify-content-center">
                            <li class="menu__item">
                                <a href="#">
                                    Кредитные карты
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="index.php">
                                    Вклады
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Дебетовые карты
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Страхование
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Друзья
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Интернет-банк
                                </a>
                            </li>
                        </ul>


                    </nav>

                </div>

        </div>
    </header>

    <section id="features" class="features">
        <div class="container">
            <nav>
                <div class="crumbs col-lg-8 ">
                    <ul class="d-flex breadcrumbs">
                        <li><a href="#">Главная></a></li>
                        <li><a href="#">Вклады></a></li>
                        <li><a href="#" class="current">Калькулятор</a></li>

                    </ul>
                </div>
            </nav>

            <nav>

                <form action="calk.php" method="post" >
                    <div class="calculator col-lg-8">
                        <h3 >Калькулятор</h3>
                        <p >

                            <label for="" class="col-lg-4 ">Дата оформления вклада:</label>
                            <input type="text" id="datepicker" class="col-lg-2 " required name="data">

                        </p>
                        <p>
                            
                            <label for="" class="col-lg-4 ">Сумма вклада: </label>
                            <input type="number" required class="col-lg-2" min="1000" max="3000000" value="1000000" id="range_one" required name="deposit_amount">
                            <input type="range"  min="1000" max="3000000" value="1500000" class="range rangeone" oninput="rangeone()">
                        </p>
                        <p>
                            <label for="" class="col-lg-4 ">Срок вклада:</label>
                            <select name="time_deposit">
                                <option selected value="1">1 год</option>
                                <option value="2">2 года</option>
                                <option value="3">3 года</option>
                                <option value="4">4 года</option>
                                <option value="5">5 лет</option>
                            </select>
                        </p>
                        <p>
                            <label for="" class="col-lg-4 ">Пополнение вклада:</label>
                            <input type="radio" name="replenishment" id="replenishment" value="No" checked onclick="inactive()"> Нет
                            <input type="radio" name="replenishment" id="replenishment" value="Yes" onclick="active()" > Да

                        </p>
                        <p>
                            <label for="" class="col-lg-4 ">Сумма пополнения вклада:</label>
                            <input type="number" class="col-lg-2"  id="range_two" name="refill" disabled>
                            <input type="range" min="1000" max="3000000" value="1500000" id="range_two_range"
                                   class="range rangetwo" oninput="rangetwo()" disabled>
                        </p>

                        <p>
                            <input type="submit" id="submit" value="Расчитать" class="button" name="submit" onclick="send()">
                            Результат: <div id="result">1850</div> руб.
                        </p>
                    </div>

                </form>



                <script type="text/javascript">
                    function send(){
                        var data = $("#data").val();
                        var deposit_amount = $("#deposit_amount").val();
                        var time_deposit = $("#time_deposit").val();
                        var replenishment = $("#replenishment").val();
                        var refill = $("#refill").val();
                        $.ajax({
                            type: "POST",
                            url: "cal.php",
                            data: {data:data,deposit_amount:deposit_amount,time_deposit:time_deposit,
                                replenishment:replenishment,refill:refill}
                        }).done(function(result)
                        {
                           //$("#messageShow").html( result );
                            alert(result );
                        });
                    }
                </script>
            </nav>


        </div>

    </section>

    <footer id="footer" class="footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 links">
                    <a href="#" class="links__item">Кредитные карты</a>
                    <a href="#" class="links__item">Вклады</a>
                    <a href="#" class="links__item">Дебетовая карта</a>
                    <a href="#" class="links__item">Страхование</a>
                    <a href="#" class="links__item">Друзья</a>
                    <a href="#" class="links__item">Интернет-банк</a>
                </div>


            </div>

        </div>
    </footer>
</body>
</html>