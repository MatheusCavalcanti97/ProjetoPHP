<html>

<head>
    <link rel="stylesheet" href="">
    <title>Login</title>
</head>

        <body>

        <?php if($this->session-flashdata("sucess")) : ?>
        <p><?= $this->session->flashdata('sucess')?></p>
        <?php endif?>

        <?php if($this->session->flashdata("danger")) : ?>
        <p><?= $this->session->flashdata('danger')?></p>
        <?php endif ?>


        </body>


</html>