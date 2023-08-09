<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "aryk922@gmail.com";  // Ganti dengan alamat email Anda
    $subject = "Pesan dari $name melalui Form Kontak";
    $headers = "From: $email";

    $mailContent = "Nama: $name\n";
    $mailContent .= "Email: $email\n\n";
    $mailContent .= "Pesan:\n$message";

    if (mail($to, $subject, $mailContent, $headers)) {
        echo "Pesan Anda telah berhasil dikirim.";
    } else {
        echo "Maaf, ada masalah dalam mengirim pesan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>