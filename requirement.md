# System Requirement

## Functional Requirement

- User dapat membuat akun baru.
- User dapat login menggunakan JWT Token.
- Sistem membuat wallet otomatis untuk user baru.
- User dapat melihat saldo wallet.
- User dapat melakukan topup saldo.
- User dapat mencatat pengeluaran berdasarkan group.
- User dapat membuat kategori pengeluaran baru.
- User dapat melihat riwayat topup.
- User dapat melihat riwayat pengeluaran.
- User dapat melihat profil.
- User dapat mengubah data profil.

## Non-Functional Requirement

- Aplikasi harus dibuat menggunakan Laravel 11.
- Database menggunakan MySQL.
- Autentikasi harus menggunakan JWT Token.
- Semua endpoint API harus mengembalikan JSON.
- Transaksi keuangan harus atomic (gunakan DB transaction).
- Saldo disimpan menggunakan tipe decimal(15,2).
- Sistem harus bisa berjalan di komputer sederhana tanpa konfigurasi kompleks.
- Kode harus mengikuti struktur default Laravel (MVC).

## User Stories

- Sebagai user, saya ingin mendaftar agar bisa memakai e-wallet.
- Sebagai user, saya ingin login untuk mengakses fitur.
- Sebagai user, saya ingin melihat saldo saya.
- Sebagai user, saya ingin melakukan topup.
- Sebagai user, saya ingin mencatat pengeluaran berdasarkan kategori.
- Sebagai user, saya ingin melihat riwayat transaksi

