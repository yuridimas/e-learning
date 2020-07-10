# **SIMPLE E-LEARNING**

### **Singkatnya**

LMS (*Learning Management System*) untuk Sekolah Dasar dengan menggunakan *framework* **Laravel 6.***

### **Requirement**

1. PHP >= 7.2.0
2. XAMPP
3. Composer
4. Nodejs & Npm

### **Clone Project**

1. Clone melalui Git
2. jalankan `composer install`
3. jalankan `npm run dev` & `npm run dev`
4. *copy paste* file `.env.example` menjadi `.env`
5. jalankan `php artisan key:generate`
6. buat database nama **bebas** dengan collation `utf8mb4_unicode_ci`
7. jalankan `php artisan migrate:fresh --seed`
8. Selesai

### **Langka awal pembuatan**

jika tidak men-clone project

1. `php artisan make:model Role -ms`
2. `php artisan make:model UserLog -m`
3. `php artisan make:model SchoolFee -mfsc`
4. `php artisan make:model Payment -mcr`
5. `php artisan make:model Course -mfcr`
6. `php artisan make:model Grade -mfsc`
7. `php artisan make:model Material -mc`
8. `php artisan make:model Assignment -mcr`
9. `php artisan make:model Answer -mcr`
10. `php artisan make:model Assessment -mcr`
11. `php artisan make:model Event -mcr`
12. `php artisan make:migration create_grade_user_table`
13. `php artisan make:migration create_course_grade_table`
14. `php artisan make:seeder UserSeeder`
15. `php artisan make:controller DashboardController`

Catatan:

- `m` = Migration
- `f` = Factory
- `s` = Seeder
- `c` = Controller
- `r` = Resource

### **Teamplate yang digunakan**

- [stisla](https://getstisla.com/)

### **Package yang diperlukan**

1. [cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable)