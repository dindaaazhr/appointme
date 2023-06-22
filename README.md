![login](https://github.com/tsabitamuthia/appointme/assets/97678433/b1182a65-6a48-458b-8c1a-668e8622454b)<h1>Hospital Appointment Management System</h1>

## Anggota Kelompok

**Pemrograman Website - C**
1. Adinda Fatimah Az-Zahra     -   [215150201111058]
2. Amira Ghina Nurfansepta     -   [215150201111026]
3. Tsabita Muthia Ayu Pramesti -   [215150201111070]

## Tugas Akhir Pemrograman Website
Nama Website : AppointMe

AppointMe adalah sebuah website yang dirancang khusus untuk membantu pengguna dalam mengatur dan mengelola antrian pasien di sebuah rumah sakit. Website ini memberikan kemudahan bagi pengguna untuk membuat janji temu dengan dokter secara online, menghindari antrean yang panjang dan waktu yang terbuang. Website ini dirancang untuk dua peran utama, yaitu Admin dan Pasien, dengan fitur-fitur yang disesuaikan untuk masing-masing peran.

### 1. Role Pasien:
![ss beranda](https://github.com/tsabitamuthia/appointme/assets/97678433/cd32cb33-4a55-4afb-a344-06cd479673ab)

Sebagai pasien di AppointMe, Anda memiliki akses untuk melakukan pendaftaran antrian dokter, melihat daftar dokter, riwayat antrian, dan daftar poli yang tersedia. Berikut adalah fitur-fitur yang tersedia untuk Anda:

- Registrasi Pasien: Fitur registrasi pada website AppointMe memungkinkan calon pasien untuk membuat akun baru. 
- Login Pasien: Fitur login pada website AppointMe memungkinkan pasien yang telah terdaftar untuk masuk ke akun pribadinya dan tertuju ke halaman beranda yang berisi informasi umum dari website AppointMe. Pasien dapat mengakses semua halaman apabila telah melakukan login terlebih dahulu.
- Pendaftaran Antrian Dokter: Anda dapat melakukan pendaftaran antrian dokter secara online. Fitur ini memungkinkan Anda untuk memilih dokter yang diinginkan, melihat jadwal ketersediaan, dan memilih waktu kunjungan yang sesuai.
- Daftar Dokter: Anda dapat melihat daftar dokter yang tersedia di rumah sakit. Fitur ini memberikan informasi tentang spesialisasi dokter, jadwal kerja, dan informasi profil lainnya.
- Riwayat Antrian: Anda dapat melihat riwayat antrian Anda, termasuk detail janji temu sebelumnya, status antrian (sedang diperiksa, selesai, dll.), dan catatan medis yang relevan. Hal ini memudahkan Anda dalam mengakses informasi kunjungan sebelumnya.
- Daftar Poli: Anda dapat melihat daftar poli yang tersedia di rumah sakit. Fitur ini memberikan informasi tentang poli spesifik, jadwal ketersediaan, dan dokter yang terkait dengan poli tersebut.

### 2. Role Admin:
![dashboard](https://github.com/tsabitamuthia/appointme/assets/97678433/1c99f106-8629-480e-bca1-54d14124de15)

Sebagai admin di AppointMe, Anda memiliki akses penuh untuk mengelola sistem antrian dan tabel data yang terkait. Berikut adalah fitur-fitur yang tersedia untuk Anda:
- Login: Fitur Login pada admin memungkinkan admin untuk langsung tertuju ke halaman dashboard dengan menu jumlah antrean, jumlah pasien, jumlah dokter, dan jumlah poli.
- Manajemen Tabel Pasien: Anda dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data pasien. Anda dapat menambahkan pasien baru, melihat daftar pasien, mengubah informasi pasien, dan menghapus data pasien jika diperlukan.
- Manajemen Tabel Dokter: Anda dapat mengelola data dokter yang terdaftar di rumah sakit. Fitur ini memungkinkan Anda untuk menambahkan dokter baru, melihat daftar dokter beserta informasi spesialisasi dan jadwal kerja, mengubah informasi dokter, dan menghapus data dokter jika diperlukan.
- Manajemen Tabel Poli: Anda dapat mengelola daftar poli yang tersedia di rumah sakit. Fitur ini memungkinkan Anda untuk menambahkan poli baru, melihat daftar poli yang tersedia, mengubah informasi poli, dan menghapus data poli jika diperlukan.
- Laporan dan Statistik: Anda dapat menghasilkan laporan dan statistik terkait jumlah antrean, jumlah pasien, jumlah dokter, dan jumlah poli.

AppointMe membantu mempercepat dan mengoptimalkan proses pendaftaran dan manajemen antrian di rumah sakit. Dengan fitur-fitur yang disesuaikan untuk admin dan pasien, website ini memudahkan koordinasi antara rumah sakit, dokter, dan pasien untuk memastikan pengalaman yang lancar dan efisien dalam perawatan medis.

## Lampiran *Screenshot*
### Pasien
**1. Login**
![login3](https://github.com/tsabitamuthia/appointme/assets/97678433/de82fc52-8e1d-4369-a892-263ac6184be3)

**3. Daftar Dokter**
![dokters](https://github.com/tsabitamuthia/appointme/assets/97678433/357f5ef3-8ece-46fe-b738-1f9a7705eb13)

**4. Buat Janji**
![ss janji](https://github.com/tsabitamuthia/appointme/assets/97678433/68d3fb68-882a-4844-a686-90c6f34ca0e8)


### Admin
**1. Data Pasien**
![pasien](https://github.com/tsabitamuthia/appointme/assets/97678433/1f6966f4-47b0-45ef-9a09-5ae3b7ce9f04)

**2. Detail Pasien**
![detail](https://github.com/tsabitamuthia/appointme/assets/97678433/f9408b9c-93aa-4cab-8ca6-7ac60b458536)

## Installation
- `git clone`
- `cd .../appointme`
- `composer install`
- `cp .env.example .env`
- Ubah ke `.env`
- php artisan key:generate
- Buat database `appointme` di PHP MyAdmin
- php artisan migrate
