// Script Menyapa \\
var Name;
var Hallo;
var hariSekarang = new Date();
var jam = hariSekarang.getHours();

Name = window.prompt("Silahkan masukan nama anda :");

if (jam < 12) Hallo = "Selamat Pagi ";

if (jam >= 12) {
  jam = jam - 12;

  if (jam < 6) Hallo = "Selamat Siang ";

  if (jam < 5) Hallo = "Selamat Sore ";

  if (jam >= 6) Hallo = "Selamat Malam ";
}

document.writeln("<h3>Hallo, " + Hallo + "" + Name + "</h2>");

// Akhir Script Menyapa \\

// Operasi Perhitungan Aritmatika silinder,kerucut,bola \\
function permukaanSilinder() {
  var r = document.getElementById("jariSilinder").value;
  var t = document.getElementById("tinggiSilinder").value;

  var hasil = 2 * Math.PI * r * r + 2 * Math.PI * r * t;
  document.getElementById("hasilPermukaan_Silinder").innerHTML = hasil.toFixed(2);
}

function volumeSilinder() {
  var r = document.getElementById("jariSilinder").value;
  var t = document.getElementById("tinggiSilinder").value;

  var hasil = Math.PI * (r * r) * t;
  document.getElementById("hasilVolume_Silinder").innerHTML = hasil.toFixed(2);
}

function permukaanKerucut() {
  var r = document.getElementById("jariKerucut").value;
  var pelukis = document.getElementById("pelukisKerucut").value;
  var t = document.getElementById("tinggiKerucut").value;

  var hasil = Math.PI * r * r + Math.PI * r * pelukis;
  document.getElementById("hasilPermukaan_Kerucut").innerHTML = hasil.toFixed(2);
}

function volumeKerucut() {
  var r = document.getElementById("jariKerucut").value;
  var t = document.getElementById("tinggiKerucut").value;

  var hasil = (1 / 3) * Math.PI * (r * r) * t;
  document.getElementById("hasilVolume_Kerucut").innerHTML = hasil.toFixed(2);
}

function permukaanBola() {
  var r = document.getElementById("jariBola").value;

  var hasil = 4 * Math.PI * r * r;
  document.getElementById("hasilPermukaan_Bola").innerHTML = hasil.toFixed(2);
}

function volumeBola() {
  var r = document.getElementById("jariBola").value;

  var hasil = (4 / 3) * Math.PI * r * r * r;
  document.getElementById("hasilVolume_Bola").innerHTML = hasil.toFixed(2);
}
// Akhir Operasi Perhitungan Aritmatika silinder,kerucut,bola \\
