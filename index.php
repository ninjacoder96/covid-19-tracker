<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Covid 19 Tracker</title>
</head>
<style>
    @font-face {
        font-family: Lato;
        src: url('fonts/Lato/Lato-Bold.ttf');
    }

    html,
    body {
        height: 100%;
    }

    .bg_stats {
        background: transparent url('img/background.png') 0% 0% no-repeat padding-box;
        background-size: cover;
        opacity: 1;
        background-attachment: fixed;
        height: 100%;
    }

    #page-content {
        position: relative;
        flex: 1 0 auto;
        top: 126px;
    }

    #sticky-footer {
        color: white;
    }

    nav {
        box-shadow: 0 2px 6px -6px black;
    }

    #statsContainer {
        position: relative;
        bottom: 60px;
    }

    #deathCountContainer>span {
        display: block;
    }

    #totalCaseCounter {
        text-align: center;
        letter-spacing: 0px;
        color: #B41010;
        opacity: 1;
        font-family: Barlow;
        font-weight: 600;
        font-size: 120px;
    }

    #totalCaseLabel {
        text-align: center;
        font: Regular 12px/15px Lato;
        letter-spacing: 0px;
        color: #818181;
        text-transform: uppercase;
        opacity: 1;
    }

    #caseTodayCounter {
        text-align: center;
        opacity: 1;
        letter-spacing: 0px;
        color: #636363;
        opacity: 1;
        font-family: Barlow;
        font-weight: 300;
        font-size: 40px;
        font-weight: normal;
    }

    #todayCaseLabel {
        text-align: center;
        font: Regular 12px/15px Lato;
        letter-spacing: 0px;
        color: #818181;
        text-transform: uppercase;
        opacity: 1;
    }

    .otherStats {
        display: inline-flex !important;
        flex-direction: column;
        justify-content: center;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 12px 16px #00000029;
        border-radius: 5px;
        opacity: 1;
        width: 162px;
        height: 140px;
        display: inline-block;
        margin: 10px;
    }

    .otherStats>p {
        margin: 0;
    }

    #recoveredCounter,
    #criticalCounter,
    #deathCounter {
        text-align: center;
        letter-spacing: 0px;
        opacity: 1;
        font-size: 30px;
    }

    #recoveredCounter {
        color: #00BB88;
    }

    #criticalCounter {
        color: #EB9300;
    }

    #recoveredLabel {
        text-align: center;
        font-size: 12px;
        letter-spacing: 0px;
        color: #818181;
        text-transform: uppercase;
        opacity: 1;
    }

    .philBrand {
        position: relative;
        left: 122px;
    }

    #dateTodayContainer {
        margin-right: 112px;
    }

    #dateTodayText {
        font: Bold 12px/15px Lato;
        text-transform: uppercase;
    }

    #countryText {
        vertical-align: middle;
        margin-left: 10px;
        font: Bold 12px/15px Lato;
        text-transform: uppercase;
        letter-spacing: 0px;
        color: black;
    }

    .card-title {
        font-size: 24px;
    }

    .card-text {
        font-size: 18px;
    }

    #numberCount {
        font-size: 26px;
    }

    #sticky-footer>div>span {
        display: block;
    }

    #dataReminder {
        text-align: center;
        font: Italic 12px/15px Lato;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
    }

    #designBy {
        text-align: center;
        font: 12px/15px Lato;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
    }
    
    #designBy a{
        color:white;
    }

    @media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
        .philBrand {
            position: relative;
            left: 0;
        }

        #dateTodayContainer {
            margin-right: 0;
        }

        .bg_stats {
            background-size: auto;
        }

        #dataReminder{
            margin:0 auto;
        }

    }
</style>

<body class="d-flex flex-column h-100 bg_stats">
    <div class="page-content">
        <nav class="navbar justify-content-between flex-nowrap flex-row">
            <a href="#" class="navbar-brand philBrand"><img src="philippines-flag-icon-256.png" class="img-fluid"><span
                    id="countryText">PHILIPPINES</span></a>
            <ul class="nav navbar-nav flex-row" id="dateTodayContainer">
                <li class="nav-item"><a class="nav-link pr-3" id="dateTodayText"></a></li>
            </ul>
        </nav>
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="statsContainer">
                        <div id="deathCountContainer">
                            <span id="totalCaseCounter"></span>
                            <span id="totalCaseLabel">Total Cases</span>
                            <span id="caseTodayCounter"></span>
                            <span id="todayCaseLabel">Cases Today</span>
                        </div>
                        <!-- <div id="caseTodayContainer">
                            <p id="caseTodayCounter"></p>
                            <span id="todayCaseLabel">Cases Today</span>
                        </div> -->

                        <div id="otherStatsContainer">
                            <div class="otherStats">
                                <span id="recoveredCounter"></span>
                                <span class="otherStatsLabel">Recovered</span>
                            </div>
                            <div class="otherStats">
                                <span id="criticalCounter"></span>
                                <span class="otherStatsLabel">Critical</span>
                            </div>
                            <div class="otherStats">
                                <span id="deathCounter"></span>
                                <span class="otherStatsLabel">Death(s)</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer id="sticky-footer" class="navbar footer mt-auto py-3">
        <div class="container">
            <span id="dataReminder">Data refreshes every hour*</span>
            <span id="designBy">Covid-19 Tracker by <a href="https://github.com/ninjacoder96">ninjacoder96</a> | Designed By Chris</span>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script>
        $(document).ready(function () {
            function getPhilippineCovidCase() {
                $.get("https://coronavirus-19-api.herokuapp.com/countries/Philippines", function (data) {
                    $("#totalCaseCounter").html(data.cases);
                    $("#caseTodayCounter").html(data.todayCases);
                    $("#deathCounter").html(data.deaths)
                    $("#recoveredCounter").html(data.recovered)
                    $("#criticalCounter").html(data.critical);

                    setTimeout(function () {
                        getPhilippineCovidCase();
                    }, 3600000);
                });
            }

            getPhilippineCovidCase();

            $("#dateTodayText").html(moment().format('MMMM D, YYYY'));

        });
    </script>
</body>

</html>