<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/402.less', 'css/402.css');
    ?>

    <link href="css/402.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    <div class='container'>
            <div class='row'>
                <div class='col-md-3'>

                    <?php include './402-content.php' ?>
                </div>
            </div>
        </div>


</body>