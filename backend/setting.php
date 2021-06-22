<?php
include('./connec/connection.php');
$menu = "setting"; ?>
<?php include("./component/header.php"); ?></br>
<section class="content"></br>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <meta charset="utf-8">
        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked+.slider {
                background-color: #2196F3;
            }

            input:focus+.slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked+.slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }

            html {
                font-family: Arial;
                display: inline-block;
                margin: 0px auto;
                text-align: center;
            }

            h1 {
                font-size: 2.0rem;
                color: #2980b9;
            }

            h2 {
                font-size: 1.25rem;
                color: #2980b9;
            }

            .buttonON {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                font-weight: bold;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #4CAF50;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
            }

            .buttonON:hover {
                background-color: #3e8e41
            }

            .buttonON:active {
                background-color: #3e8e41;
                box-shadow: 0 1px #666;
                transform: translateY(4px);
            }

            .buttonOFF {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                font-weight: bold;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #e74c3c;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
            
        </style>
    </head>
    <body>
        <form action="updateDBLED.php" method="post" id="LED_ON" onsubmit="myFunction()">
            <input type="hidden" name="Stat" value="1" />
        </form>
        <form action="updateDBLED.php" method="post" id="LED_OFF">
            <input type="hidden" name="Stat" value="0" />
        </form>
        <button class="buttonON" name="subject" type="submit" form="LED_ON" value="SubmitLEDON">ตัดไฟ</button>
        <button class="buttonOFF" name="subject" type="submit" form="LED_OFF" value="SubmitLEDOFF">จ่ายไฟ</button>
        <!-- Bootstrap Switch -->
    </body>

    </html>
</section>
        <script>
  function toggleApiOnSilent() {
    $('#toggle-silent').bootstrapToggle('on', true);
  }
  function toggleApiOffSilent() {
    $('#toggle-silent').bootstrapToggle('off', true);
  }
</script>
<!-- /.content -->
<?php include('./component/footer.php'); ?>