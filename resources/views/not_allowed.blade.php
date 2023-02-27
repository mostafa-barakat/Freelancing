<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>403</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100;
            margin: 0;
            padding: 0;
            font-family: 'Limelight', cursive;
            color: #38434A;
        }

        .background {
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
        }

        .background::before {
            display: block;
            content: '';
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 450px;
            height: 450px;
            background: #EEE8E0;
            border-radius: 50%;
            z-index: -1;
        }

        .background::after {
            display: block;
            content: '';
            position: absolute;
            top: -150px;
            left: 50%;
            transform: translateX(-50%);
            width: 550px;
            height: 550px;
            background: #F3F2EE;
            border-radius: 50%;
            z-index: -2;
        }

        .door {
            position: relative;
            width: 180px;
            height: 300px;
            margin: 0 auto -10px;
            background: #F3F2EE;
            border: 10px solid #DAD2C9;
            border-radius: 3px;
            font-size: 50px;
            line-height: 3;
            text-align: center;
            text-shadow: 0 2px #F5AE4E;
        }

        .door::before {
            display: block;
            content: '';
            position: absolute;
            top: 140px;
            right: 10px;
            width: 25px;
            height: 25px;
            background: #1D2528;
            border-radius: 50%;
        }

        .door::after {
            display: block;
            content: '';
            position: absolute;
            top: 148px;
            right: 18px;
            width: 35px;
            height: 10px;
            background: #49555B;
            border-radius: 5px;
        }

        .rug {
            width: 180px;
            border-bottom: 120px solid #CF352C;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
        }

        .rug::before {
            display: block;
            content: '';
            position: relative;
            width: 100%;
            height: 10px;
            background: #9C0502;
        }

        .foreground {
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
        }

        .bouncer {
            position: relative;
            left: -130px;
            transition: left 1.5s;
        }

        .bouncer .head {
            position: relative;
            left: 10px;
            margin-bottom: 10px;
            width: 65px;
            height: 90px;
            background: #FFB482;
            border-radius: 15px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .bouncer .head::before {
            display: block;
            content: '';
            position: absolute;
            right: 0;
            bottom: 0;
            width: 55px;
            height: 40px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 15px;
            z-index: 10;
        }

        .bouncer .head .neck {
            position: absolute;
            bottom: -15px;
            width: 48px;
            height: 30px;
            background: #FFB482;
            z-index: 5;
        }

        .bouncer .head .neck::before {
            display: block;
            content: '';
            position: absolute;
            top: 15px;
            right: 0;
            width: 0px;
            height: 0px;
            border-left: 15px solid transparent;
            border-right: 15px solid rgba(0, 0, 0, 0.3);
            border-top: 2px solid rgba(0, 0, 0, 0.3);
            border-bottom: 2px solid transparent;
        }

        .bouncer .head .eye {
            position: absolute;
            top: 40px;
            width: 5px;
            height: 5px;
            background: #1D2528;
            border-radius: 50%;
        }

        .bouncer .head .eye.left {
            right: 5px;
        }

        .bouncer .head .eye.right {
            right: 30px;
        }

        .bouncer .head .eye::before {
            display: block;
            content: '';
            position: relative;
            bottom: 8px;
            right: 5px;
            width: 15px;
            height: 5px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            transition: bottom 0.5s;
        }

        .bouncer .head .ear {
            position: relative;
            top: 40px;
            left: -10px;
            width: 20px;
            height: 20px;
            background: #FFB482;
            border-radius: 50%;
        }

        .bouncer .head .ear::before {
            display: block;
            content: '';
            position: relative;
            top: 5px;
            left: 5px;
            width: 10px;
            height: 10px;
            background: #FFF;
            border-radius: 50%;
        }

        .bouncer .head .ear::after {
            display: block;
            content: '';
            position: relative;
            top: -3px;
            left: 10px;
            width: 10px;
            height: 55px;
            border-top: 3px solid transparent;
            border-left: 2px solid #FFF;
            border-bottom: 3px solid transparent;
            border-radius: 50%;
            transform: rotate(-10deg);
            z-index: 10;
        }

        .bouncer .body {
            position: relative;
            width: 110px;
            height: 270px;
            background: #1D2528;
            border-top-right-radius: 45px;
            border-top-left-radius: 15px;
        }

        .bouncer .body::before {
            display: block;
            content: '';
            position: relative;
            top: 5px;
            width: 104px;
            height: 110px;
            background: #FFF;
            border-top-right-radius: 42px;
        }

        .bouncer .body::after {
            display: block;
            content: '';
            position: absolute;
            top: 0;
            width: 75px;
            height: 180px;
            background: #38434A;
            border-top-right-radius: 42px;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 10px;
            z-index: 15;
        }

        .bouncer .arm {
            position: absolute;
            top: 105px;
            left: -20px;
            width: 60px;
            height: 230px;
            background: #49555B;
            border-radius: 30px;
            box-shadow: -1px 0px #1D2528;
            transform: rotate(-30deg);
            transform-origin: top center;
            z-index: 20;
            transition: transform 1s;
        }

        .bouncer .arm::before {
            display: block;
            content: '';
            position: absolute;
            bottom: 0;
            width: 60px;
            height: 60px;
            background: #FFB482;
            border-radius: 50%;
        }

        .poles {
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-25%);
        }

        .poles .pole {
            position: absolute;
            bottom: 0;
            width: 15px;
            height: 135px;
            background: #F5AE4E;
        }

        .poles .pole.left {
            left: 200px;
        }

        .poles .pole.right {
            right: 200px;
        }

        .poles .pole::before {
            display: block;
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 25px;
            height: 25px;
            background: #F5AE4E;
            border-radius: 50%;
            box-shadow: inset 0 -2px #DF9D41;
        }

        .poles .pole::after {
            display: block;
            content: '';
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 25px;
            height: 4px;
            background: #F5AE4E;
            border-radius: 4px;
            box-shadow: 0 2px #DF9D41;
        }

        .poles .rope {
            position: absolute;
            top: -110px;
            left: -218px;
            width: 150px;
            height: 75px;
            border: 20px solid #CF352C;
            border-top: 0;
            border-bottom-left-radius: 150px;
            border-bottom-right-radius: 150px;
            box-shadow: 0 2px #9C0502;
            box-sizing: border-box;
            transition: width 1.5s;
        }

        .hover:hover .bouncer {
            left: 130px;
        }

        .hover:hover .arm {
            transform: rotate(-42deg);
        }

        .hover:hover .rope {
            width: 435px;
        }

        .hover:hover .eye::before {
            bottom: 4px;
        }
    </style>
</head>

<body>
    <div class='hover'>
        <div class='background'>
            <div class='door'>403</div>
            <div class='rug'></div>
        </div>
        <div class='foreground'>
            <div class='bouncer'>
                <div class='head'>
                    <div class='neck'></div>
                    <div class='eye left'></div>
                    <div class='eye right'></div>
                    <div class='ear'></div>
                </div>
                <div class='body'></div>
                <div class='arm'></div>
            </div>
            <div class='poles'>
                <div class='pole left'></div>
                <div class='pole right'></div>
                <div class='rope'></div>
            </div>
        </div>
    </div>

</body>

</html>
