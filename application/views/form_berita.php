<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>News Topic Classifier with Prosa.ai</title>
    <style type="text/css">
        .header{
            width:100%;
            height:70px;   
            background:#17eded;
            margin: 5px 5px 0px 5px;
        }
        .content{
            width: 100%;
            height: 100%;
            background: #b2b0b0;
            margin: 5px 5px 0px 5px;
        }
        .footer{
            width:100%;
            height:100px;
            background:#17eded;
            margin: 5px 5px 0px 5px;
        }
    </style>
</head>
<body>
   <div class="header">
        <h3 style="line-height: 60px; margin-left: 29px;">News Topic Classifier with Prosa.ai</h3>
   </div>
   <div class="content">
    <center>
        <h4 style="line-height: 40px; ">Copy Paste Berita Yang Ingin Di Klasifikasi</h4>
        <?php echo form_open('berita/masukan_Berita'); ?>
        <?php
        $form_artikel = array('name' => 'isi_berita', 'cols' => '150', 'rows' => '20');
        echo form_textarea($form_artikel) . '<br/>';
        echo form_submit('submit', 'Simpan');
        echo form_close(); 
        ?>
    </center>
    </div>
    <div class="footer">
        <center>
            <P style="line-height: 100px;"> copyright@TugasIR</P>
        </center>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>