# Sistem Manajemen Inventaris

Aplikasi web untuk mengelola stok produk dan mencatat transaksi barang masuk/keluar, dibangun dengan Laravel.

## Fitur
- Autentikasi (login/register)
- CRUD Produk (nama, kategori, stok, harga)
- Pencatatan transaksi masuk & keluar dengan update stok otomatis
- Validasi stok (mencegah transaksi keluar melebihi stok tersedia)
- Dashboard ringkasan: total produk, total stok, alert stok menipis, transaksi terbaru

## Tech Stack
- Laravel 11
- Blade Templating + Tailwind CSS
- MySQL
- Laravel Breeze (autentikasi)

## Cara Menjalankan
\`\`\`bash
git clone (https://github.com/NasyaEcclesia2007/inventaris-app.git)
cd inventaris-app
composer install
npm install
cp .env.example .env
php artisan key:generate
# sesuaikan koneksi database di .env
php artisan migrate --seed
npm run build
php artisan serve
\`\`\`

## Screenshot
(tempel screenshot dashboard, list produk, form transaksi di sini)