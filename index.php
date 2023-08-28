<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/bootstrap-grid.min.css" </head>

<body>
    <center>

        <h1>LifeCheck</h1>
        <h2>Prüfe Switches auf End-of-Life</h2>

    </center>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="box box-color-second">
                    <b>Wähle deinen Hersteller:</b>
                    <br>
                    <?php include('frontend/get-selected-item.php'); ?>
                </div>

                <br>
                <div class="box box-color-fourth">
                    <b class="github-claim">
                        <p>Hilf mir die Liste aktuell zu halten, besuche mich auf Gihub
                            <br><br>
                            <center><a href="https://github.com/chrischivlog/LifeCkeck-Data"><img src="assets/img/github-mark-white.svg" width="50px"></center></a>
                        </p>
                    </b>
                </div>
            </div>

            <div class="col-sm">
                <div class="box box-color-fourth">
                    <table>
                        <tr>
                            <th>Hersteller</th>
                            <th>Modell</th>
                            <th>End of Life</th>
                            <th></th>
                            <th>Webseite</th>
                        </tr>
                    </table>
                </div>
<?php include('frontend/search.php')?>
            </div>
        </div>

</body>

</html>