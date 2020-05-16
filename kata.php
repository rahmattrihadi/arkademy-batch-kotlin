<?php
    $kata="1. Saya Lolos Batch Kotlin Arkademy";
?>
    Kata: <?php echo $kata?>
    
    <p>
<?php
    $jumlah_kata=str_word_count($kata);
    echo "Jumlah Kata = $jumlah_kata Kata";
?>
</p>