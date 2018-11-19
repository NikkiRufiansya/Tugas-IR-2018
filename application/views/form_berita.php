<!DOCTYPE html>
<html>
<head>
    <title>News Topic Classifier with Prosa.ai</title>
</head>
<body>
    <h3>News Topic Classifier with Prosa.ai</h3>
    <p>Masukkan berita yang mau di klasifikasi</p>
    <?php echo form_open('berita/masukan_Berita'); ?>
    <?php
        $form_artikel = array('name' => 'isi_berita', 'cols' => '150', 'rows' => '20');
        echo form_textarea($form_artikel) . '<br/>';
        echo form_submit('submit', 'Simpan');
        echo form_close(); 
    ?>


   
</body>
</html>