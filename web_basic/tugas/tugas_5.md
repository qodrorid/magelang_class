# TUGAS 5 - Javascript Dasar

1. Buat fungsi untuk mengecek tingkat nilai murid, dengan parameter nama dan nilai, ketentuan nilai A (90-100), B (80-89), C (70-79) dan D (60 - 69).
    - Output: `Andy Nur, nilai 90 (A)`
    - Referensi: _JS Conditions_

2. Buat fungsi untuk mengecek bulan (1-12), jika 1 maka akan muncul `alert` "Bulan Januari", jika 2 Februari dan seterusnya.
    - Output: pesan pop up => `Bulan Januari`
    - Referensi: _JS Switch_

3. Buat sebuah array `sayuran` berisi 5 data, lalu gunakan perulangan (`looping`) untuk menampilkan semua isinya. Gunakan `for` kemudian `while` (terpisah). Jika sayur ke-2 maka dilewati (tidak muncul), jika sampai sayur ke-4 maka berhenti.
    - Output: `1. Jipan, 3. Sawi, 4. Kol`
    - Referensi: _JS Loop For/While, JS Break/Continue_

4. Buat sebuah object `laptop` dengan property merk, tipe, ram, kemudian tampilkan semua isi property-nya menggunkan `for in`.
    - Output: `merknya ASUS / tipenya X450 / ramnya 4 GB`
    - Referensi: _JS Objects_

5. Buat sebuah `object constructor` dengan nama `LaptopAnyar`  dengan property sebagaimana soal no.4, lalu buat dua variabel untuk memanggil object `laptopAnyar` dengan parameter yang berbeda.
    - Output: `[sebagaimana no.4 tapi ada dua output dari 2 variabel yg dibuat]`
    - Referensi: _JS Objects_

6. Tambahkan property `hdd` di object constructor `LaptopAnyar` (soal no.5) dan `tampilkanHdd` (method untuk mengembalikan nilai hdd), lalu panggil method tampilkanHobi dari dua variabel di soal no.5.
    - Output: `ASUS X450 memiliki kapasitas hardisk sebesar 500 GB`
    - Referensi: _JS Objects_

7. Buat sebuah `closure` (_fungsi yang mengembalikan nilai dari fungsi didalamnya_) dengan nama `santriQodr`, prameternya `nama`, lalu untuk fungsi didalamnya diberi nama `nickname` dengan parameter `nick` yang fungsi ini berguna untuk mengembalikan nama dan nickname-nya.
    - Output: 
      ```javascript
      var andy = santriQodr('Andy Nur');
      andy.nickname('andynur');
      // outputnya: "Andy Nur a.k.a andynur"
      ```
    - Referensi: _JS Function Closures_

**Buat element sebagaimana dibawah:**
```html
<div id="wrapper">
    <div class="row">
        <h1>Sample One</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="row">
        <h1 class="custom">Sample Two</h1>
        <ol class="list">
            <li class="kleru">Data 1</li>
            <li>Data 2</li>
            <li>Data 3</li>
        </ol>
    </div>
    <div class="ampas">
        ada hanya untuk dihapus.
    </div>
</div>
```
8. Ganti teks `Sample` di tag `<h1>`  menjadi _Heading_
9. Hapus class `custom` lalu tambahkan attribute `title` dengan isi `custom`
10. Ganti class `kleru` menjadi `true` lalu tambahkan element `<li>` baru diatasnya dengan isi `Data 0`
11. Hapus elemen dengan class `ampas`
12. Berikan efek css di class `row` dengan background, margin, dan padding
13. Jadikan tag `<p>` menjadi warna merah
14. Berikan border dan box-shadow pada id `wrapper`

- Referensi soal no.8-14: _JS HTML DOM_

## CATATAN

- Usahakan jangan cari jawaban di google, tapi di `w3schools` aja, karna semua sudah dibahas saat dikelas
- Kerjakan disaat ada waktu kosong atau longgar, yang sudah silahkan pm `@andynur` via telegram
- Yang sudah dicek dan direvisi silahkan `push` tugas nya ke github **magelang_class** di folder *tugas_5*