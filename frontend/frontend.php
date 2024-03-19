<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/bootstrap-grid.min.css" 
</head>

<body>
    <center>

        <h1>LifeCheck</h1>
        <h2>Check switches end of life</h2>

    </center>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="box box-color-second">
                    <b>Select a brand:</b>
                    <br>
                    <?php getItem(); ?>
                </div>

                <br><?php mail_modal();?>
                <br>
                <div class="box box-color-third">
                    <b class="github-claim">
                        <p>Hilf mir die Liste aktuell zu halten, besuche mich auf Github
                            <br><br>
                            <center><a href="https://github.com/chrischivlog/LifeCkeck-Data"><img src="assets/img/github-mark-white.svg" width="50px"></center></a>
                        </p>
                    </b>
                </div>            

            </div>


            <div class="col-sm">
                <div class="box box-color-fourth">

                        <?php printmodels();?>

                    </table>
                </div>
            </div>
        </div>
        <br>

<center>Made with ❤️ by chrischivlog</center>
</body>

</html>