
<p align="center"><strong> MandarResep- Sistem Informasi pencarian makanan khas mandar</strong></p>

<div align="center">

![logo_unsulbar](public/gambar/logo.png)



<b>Julianti</b><br>
<b>D0222023</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---
## 👥 Role dan Fitur-fiturnya

### 🍳 Pengguna (Pencari Resep)
- Registrasi & Login
- Pencarian Resep
- Melihat Detail Resep
- Menyimpan Resep Favorit
- Melihat Daftar Favorit
### 👨‍🍳 Kontributor (Pengunggah Resep)
- Registrasi & Login
- Menambahkan Resep Baru
- Mengedit & Menghapus Resep
- Melihat Daftar Resep Sendiri
- Melihat Statistik Resep

### 🛠️ Admin
- Login
- Mengelola Akun Pengguna
- Mengelola Kategori

## 🗃️ Tabel tabel database beserta field dan tipe datany

### 1. `users`
| Nama Field  | Tipe Data    | Keterangan                               |
|-------------|--------------|------------------------------------------|
| id          | BIGINT       | Primary key                              |
| nama        | VARCHAR      | Nama lengkap pengguna                    |
| email       | VARCHAR      | Email pengguna                           |
| password    | VARCHAR      | Kata sandi (hashed)                      |
| role        | ENUM         | Peran: `pengguna`, `kontributor`, `admin`|
| created_at  | DATETIME     | Timestamp pembuatan                      |

### 2. `categories`
| Nama Field  | Tipe Data    | Keterangan                               |
|-------------|--------------|------------------------------------------|
| id          | BIGINT       | Primary key                              |
| name        | VARCHAR      | Nama kategori (misalnya: kue, lauk, dll) |
| created_at  | DATETIME     | Timestamp pembuatan                      |

### 3. `recipes`
| Nama Field  | Tipe Data    | Keterangan                                   |
|-------------|--------------|------------------------------------------    |
| id          | BIGINT       | Primary key                                  |
| user_id     | BIGINT       | Foreign key ke tabel `users` (kontributor)   |
| title       | VARCHAR      | Judul resep                                  |
| description | TEXT         | Deskripsi atau catatan resep                 |
| photo_url   | VARCHAR      | URL foto resep                               |
| category_id | BIGINT       | Foreign key ke tabel `categories` (kategori) |
| created_at  | DATETIME     | Timestamp pembuatan                          |

### 4. `ingredients`
| Nama Field  | Tipe Data    | Keterangan                               |
|-------------|--------------|------------------------------------------|
| id          | BIGINT       | Primary key                              |
| recipe_id   | BIGINT       | Foreign key ke tabel `recipes`           |
| name        | VARCHAR      | Nama bahan                               |
| quantity    | VARCHAR      | Jumlah bahan (misalnya: 2 sdm)           |

### 5. `steps`
| Nama Field  | Tipe Data    | Keterangan                               |
|-------------|--------------|------------------------------------------|
| id          | BIGINT       | Primary key                              |
| recipe_id   | BIGINT       | Foreign key ke tabel `recipes`           |
| step_number | INT          | Urutan langkah                           |
| instruction | TEXT         | Deskripsi langkah pembuatan              |

### 6. `favorites`
| Nama Field  | Tipe Data    | Keterangan                               |
|-------------|--------------|------------------------------------------|
| id          | BIGINT       | Primary key                              |
| user_id     | BIGINT       | Foreign key ke tabel `users` (pengguna)  |
| recipe_id   | BIGINT       | Foreign key ke tabel `recipes` (resep yang difavoritkan) |
| created_at  | DATETIME     | Timestamp pembuatan                      |



## 🔗 Jenis relasi dan tabel yang berelasi

- users↔️ recipes → One-to-many  
- recipes ↔️ ingredients → One-to-Many  
- recipes ↔️ steps → One-to-Many  
- users ↔️ favorites → One-to-Many  
- recipes ↔️ favorites → One-to-Many  
- categories ↔️ recipes → One-to-Many

---


bfdbfhsdjfs