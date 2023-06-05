<?php
$search = $_GET["search"];
if ($search == "ayam") {
  $content = "Ayam adalah unggas yang sering dijadikan sebagai sumber makanan.";
} elseif ($search == "raflesia") {
  $content = "Raflesia adalah bunga parasit terbesar di dunia yang hanya tumbuh di daerah tropis.";
} elseif ($search == "savana") {
  $content = "Savana adalah padang rumput yang biasanya terletak di daerah tropis dan subtropis.";
} else {
  $content = "Maaf, kata kunci yang Anda masukkan tidak ditemukan.";
}
?>

<div class="search-result">
  <h2><?php echo $search; ?></h2>
  <p><?php echo $content; ?></p>
</div>
