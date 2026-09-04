# Mini Library OOP

Ringkasan singkat dan analisis dari implementasi mini-library berbasis OOP di folder ini.

## Struktur proyek
- [index.php](index.php) - runner contoh yang menggunakan kelas-kelas di bawah.
- [Book.php](Book.php) - kelas `Book` dasar.
- [DigitalBook.php](DigitalBook.php) - subclass dari `Book` untuk buku digital.
- [Member.php](Member.php) - kelas `Member` untuk meminjam buku.

## Tujuan
Proyek ini menunjukkan konsep OOP dasar di PHP: enkapsulasi, pewarisan, dan interaksi antar-objek (member meminjam buku).

## Ringkasan kelas & perilaku
- `Book`
	- Properti: `title`, `author`, `year`, `isAvailable` (protected, default true).
	- Metode penting: `pinjambuku()` — menandai buku sebagai tidak tersedia dan mengembalikan boolean; `getinfobuku()` — mengembalikan string informasi buku.
- `digitalBook` (subclass `Book`)
	- Menambahkan properti `format` dan menimpa `getinfobuku()` untuk menyertakan format.
	- Catatan: nama kelas ditulis `digitalBook` (huruf kecil di awal). Di PHP nama kelas case-insensitive, namun konvensi PascalCase (`DigitalBook`) lebih konsisten.
- `Member`
	- Properti: `name`, `idmember`, `borrowedBooks` (array).
	- Metode: `pinjambuku(Book $book)` — memanggil `pinjambuku()` pada objek `Book` dan menambahkan buku ke `borrowedBooks` jika berhasil; `getInfoMember()` mengembalikan ringkasan nama, id, dan daftar buku yang dipinjam.

## Contoh output
Program menampilkan informasi semua buku, informasi member, lalu status setelah beberapa peminjaman. Contoh (disingkat):

```
=== Mini Library OOP ===

=== Informasi Buku ===
Title: Fasilkom
Author: anak fasilkom
Year: 2023
Status: Tidak Tersedia
...

=== Informasi Member ===
Name: Ray
ID Member: 1
Borrowed Books:
Title: Fasilkom
...
```

