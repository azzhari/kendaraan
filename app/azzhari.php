<?php
// Definisikan namespace jika diperlukan
namespace App;

class TextFormatter {
    // Method untuk mengubah teks menjadi kapital pertama
    public static function capitalize($text) {
        return ucwords(strtolower($text));
    }

    // Method untuk mengubah teks menjadi kalimat dengan kapital pertama
    public static function sentence($text) {
        return ucfirst(strtolower($text));
    }

    // Method untuk mengubah teks menjadi huruf besar semua
    public static function upper($text) {
        return strtoupper($text);
    }
}

