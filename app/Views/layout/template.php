<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    img.scaled {
        width: 100%;
        height: 100%;
    }
    </style>

    <!-- my Css -->
    <link rel="stylesheet" href="<?=base_url('/');?>/css/style.css">
</head>

<body>



    <?=$this->renderSection('content');?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>