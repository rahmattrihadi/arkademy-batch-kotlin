<?php
$angka = '23453542';
?>
    Kata: <?php echo $angka?>
    <p></p>

<?php
foreach(count_chars($angka,1 ) as $i => $val)
{
echo "Pasangan \"" ,  chr($i) , "Pasang [$val] <br>";
}
?>