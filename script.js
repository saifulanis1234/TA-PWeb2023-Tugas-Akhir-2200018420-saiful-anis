document.addEventListener("DOMContentLoaded", function() {
      // Ambil elemen dengan ID "sks", "ipk", dan "status"
      var namaElement = document.getElementById("nama");
      var nimElement = document.getElementById("nim");
      var sksElement = document.getElementById("sks");
      var ipkElement = document.getElementById("ipk");
      var statusElement = document.getElementById("status");

      // Contoh data SKS, IPK, dan status mahasiswa
      var nama = "SAIFUL ANIS";
      var nim = 2200018420;
      var sks = 120;
      var ipk = 3.75;
      var status = "Aktif";

      // Masukkan nilai SKS, IPK, dan status ke dalam elemen HTML
      namaElement.textContent = nama;
      nimElement.textContent = nim;
      sksElement.textContent = sks;
      ipkElement.textContent = ipk;
      statusElement.textContent = status;
    });