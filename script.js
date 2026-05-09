// File: script.js

function proseslogin() {

    // Ambil nilai input
    let inputUser = document.getElementById("username").value;
    let inputPass = document.getElementById("password").value;

    if(inputUser === "" || inputPass === ""){
        alert("Username dan Password harus diisi!");
        return;
    }

    // Kirim form ke proses.php
    document.getElementById("loginForm").submit();
}