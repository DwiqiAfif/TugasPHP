<?php
function hitungUmur($thn_lahir, $thn_sekarang){
	$umur = $thn_sekarang - $thn_lahir;
	return $umur;
}

echo "Umur saya adalah ". hitungumur(2001 2020) ." tahun";
?>