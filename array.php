<?php 

//mendefinisikan sebuah array
$list_buah = ["pepaya", "mangga", "pisang", "jambu"];

/**
 * nilai di dalam array masing-masing memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimulai dari 0
 */

echo $list_buah[2];
echo "<br>List_berisi " , count($list_buah) . "buah";

//mencetak seluruh nilai didalam array
echo"<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//menambahkan nilai array 
$list_buah[] = "durian";
echo "</ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//menghapus nilai array
unset($list_buah[1]);
echo "</ol>";
foreach ($list_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";

//mengubah nilai array berdasarkan index
$list_buah[0] = "manggis";
foreach ($list_buah as $buah){
    echo "<li>$buah</li>";
}

//mencetak seluruh nilai array beserta indexnya
echo "<ul>";
foreach ($list_buah as $index => $buah){
    echo "<li>buah dengan index $index adalah $buah</li>";
}
echo "</ol>";