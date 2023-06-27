<h1>Hospital Appointment Management System</h1>

## Anggota Kelompok

**Pemrograman Website - C**
1. Adinda Fatimah Az-Zahra     -   [215150201111058]
2. Amira Ghina Nurfansepta     -   [215150201111026]
3. Tsabita Muthia Ayu Pramesti -   [215150201111070]

## Tugas Akhir Pemrograman Website
Nama Website : AppointMe

AppointMe adalah sebuah website yang dirancang khusus untuk membantu pengguna dalam mengatur dan mengelola antrian pasien di sebuah rumah sakit. Website ini memberikan kemudahan bagi pengguna untuk membuat janji temu dengan dokter secara online, menghindari antrean yang panjang dan waktu yang terbuang. Website ini dirancang untuk dua peran utama, yaitu Admin dan Pasien, dengan fitur-fitur yang disesuaikan untuk masing-masing peran.

### 1. Role Pasien:
![ss beranda](https://github.com/tsabitamuthia/appointme/assets/97678433/13c3e94b-ec3d-45dd-99c5-ac86a1b406eb)

Sebagai pasien di AppointMe, Anda memiliki akses untuk melakukan pendaftaran antrian dokter, melihat daftar dokter, riwayat antrian, dan daftar poli yang tersedia. Berikut adalah fitur-fitur yang tersedia untuk Anda:

- Registrasi Pasien: Fitur registrasi pada website AppointMe memungkinkan calon pasien untuk membuat akun baru. 
- Login Pasien: Fitur login pada website AppointMe memungkinkan pasien yang telah terdaftar untuk masuk ke akun pribadinya dan tertuju ke halaman beranda yang berisi informasi umum dari website AppointMe. Pasien dapat mengakses semua halaman apabila telah melakukan login terlebih dahulu.
- Pendaftaran Antrian Dokter: Anda dapat melakukan pendaftaran antrian dokter secara online. Fitur ini memungkinkan Anda untuk memilih dokter yang diinginkan, melihat jadwal ketersediaan, dan memilih waktu kunjungan yang sesuai.
- Daftar Dokter: Anda dapat melihat daftar dokter yang tersedia di rumah sakit. Fitur ini memberikan informasi tentang spesialisasi dokter, jadwal kerja, dan informasi profil lainnya.
- Riwayat Antrian: Anda dapat melihat riwayat antrian Anda, termasuk detail janji temu sebelumnya, status antrian (sedang diperiksa, selesai, dll.), dan catatan medis yang relevan. Hal ini memudahkan Anda dalam mengakses informasi kunjungan sebelumnya.
- Daftar Poli: Anda dapat melihat daftar poli yang tersedia di rumah sakit. Fitur ini memberikan informasi tentang poli spesifik, jadwal ketersediaan, dan dokter yang terkait dengan poli tersebut.

### 2. Role Admin:
![dashboard](https://github.com/tsabitamuthia/appointme/assets/97678433/88c3bc10-1d33-4fc4-872e-55c41eda8a1b)


Sebagai admin di AppointMe, Anda memiliki akses penuh untuk mengelola sistem antrian dan tabel data yang terkait. Berikut adalah fitur-fitur yang tersedia untuk Anda:
- Login: Fitur Login pada admin memungkinkan admin untuk langsung tertuju ke halaman dashboard dengan menu jumlah antrean, jumlah pasien, jumlah dokter, dan jumlah poli.
- Manajemen Tabel Pasien: Anda dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data pasien. Anda dapat menambahkan pasien baru, melihat daftar pasien, mengubah informasi pasien, dan menghapus data pasien jika diperlukan.
- Manajemen Tabel Dokter: Anda dapat mengelola data dokter yang terdaftar di rumah sakit. Fitur ini memungkinkan Anda untuk menambahkan dokter baru, melihat daftar dokter beserta informasi spesialisasi dan jadwal kerja, mengubah informasi dokter, dan menghapus data dokter jika diperlukan.
- Manajemen Tabel Poli: Anda dapat mengelola daftar poli yang tersedia di rumah sakit. Fitur ini memungkinkan Anda untuk menambahkan poli baru, melihat daftar poli yang tersedia, mengubah informasi poli, dan menghapus data poli jika diperlukan.
- Laporan dan Statistik: Anda dapat menghasilkan laporan dan statistik terkait jumlah antrean, jumlah pasien, jumlah dokter, dan jumlah poli.

AppointMe membantu mempercepat dan mengoptimalkan proses pendaftaran dan manajemen antrian di rumah sakit. Dengan fitur-fitur yang disesuaikan untuk admin dan pasien, website ini memudahkan koordinasi antara rumah sakit, dokter, dan pasien untuk memastikan pengalaman yang lancar dan efisien dalam perawatan medis.

## Lampiran Beberapa *Screenshot*
### Pasien
**1. Login**
![login](https://github.com/tsabitamuthia/appointme/assets/97678433/018d0d9c-7ec0-4c20-a554-496d9d2af1e7)


**3. Daftar Dokter**
![dokters](https://github.com/tsabitamuthia/appointme/assets/97678433/5e1c70dd-f449-411b-9107-13834cefe042)


**4. Buat Janji**
![janji](https://github.com/tsabitamuthia/appointme/assets/97678433/941ece16-222d-441e-aa1e-3c1444bb0db2)


### Admin
**1. Data Pasien**
![pasien](https://github.com/tsabitamuthia/appointme/assets/97678433/11e82124-01e2-4f02-9d99-84c676b0682f)


**2. Detail Pasien**
![detail](https://github.com/tsabitamuthia/appointme/assets/97678433/fc386930-dddb-4be9-b2ce-7070d9606d30)

## Lampiran Revisi 
**1. Jumlah Antrean**
- Kami telah merevisi jumlah antrean yang sudah dibagi dalam beberapa kelompok, yaitu : Semua, Selesai, dan Dalam antrean. Kelompok ini memiliki jenis antrian sesuai dengan statusnya sehingga admin dapat mengetahui antrian yang masih ada dan yang sudah selesai

**2. Pilihan Poli saat pasien mendaftar**
- Pasien jarang sekali untuk memilih berdasarkan poli, sehingga pada form dropdown, kami telah menambahkan poli yang dimiliki oleh setiap dokter. Hal ini bertujuan agar pasien dapat mengetahui poli dari setiap dokter yang akan mereka daftar

**3. Link deployr**
- Kami telah mendeploy web kami menggunakan AWS EC2
- Link : http://54.164.139.244/login
- Akun admin
  Email : adminappointme@health.co.id
  pw      : 123
  
## Installation
- `git clone <URL HTTPS Github>`
- `cd .../appointme`
- `composer install`
- `cp .env.example .env`
- Ubah ke `.env`
- `php artisan key:generate`
- Buat database `appointme` di PHP MyAdmin
- `php artisan migrate`
