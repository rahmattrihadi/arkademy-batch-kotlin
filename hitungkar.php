<?php
$kata = 'saya harus lulus batch arkademy ';
?>
    Kata: <?php echo $kata?>
    <p>

<?php
foreach(count_chars($kata,1 ) as $i => $val)
{
echo "Huruf \""  ,  chr($i) , "\ muncul $val kali.<br>";
}
?>

