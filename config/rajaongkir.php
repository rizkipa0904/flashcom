<?php

return [
    /*
     * Atur API key yang dibutuhkan untuk mengakses API Raja Ongkir.
     * Dapatkan API key dengan mengakses halaman panel akun Anda.
     */
    'api_key' => env('RAJAONGKIR_API_KEY', 'f3b5a88b9e7aed0293c81396bd0838b6'),

    /*
     * Atur tipe akun sesuai paket API yang Anda pilih di Raja Ongkir.
     * Pilihan yang tersedia: ['starter', 'basic', 'pro'].
     */
    'package' => env('RAJAONGKIR_PACKAGE', 'starter'),
];
