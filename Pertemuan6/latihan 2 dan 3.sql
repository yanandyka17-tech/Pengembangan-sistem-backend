CREATE DATABASE perpustakaan_db
CHARACTER SET utf8mb4;

USE perpustakaan_db;

CREATE TABLE buku (
id INT AUTO_INCREMENT PRIMARY KEY,
judul VARCHAR(255),
penulis VARCHAR(150),
tahun INT,
stok INT DEFAULT 0,
harga DECIMAL(12,2)
);

CREATE TABLE anggota ( 
id INT AUTO_INCREMENT PRIMARY KEY, 
nama VARCHAR (100), 
email VARCHAR (255) UNIQUE, 
nomor_telpon VARCHAR (20), 
tgl_daftar DATE 
);

CREATE TABLE peminjaman ( 
id_peminjaman INT AUTO_INCREMENT PRIMARY KEY, 
id_buku INT NOT NULL, 
id_anggota INT NOT NULL, 
tgl_peminjaman DATE NOT NULL, 
tgl_pengembalian DATE, 
FOREIGN KEY (id_buku) 
REFERENCES buku (id), 
FOREIGN KEY (id_anggota) 
REFERENCES anggota (id) 
);

INSERT INTO buku (judul, penulis, tahun, stok, harga) 
Values 
('Perjalanan sang DEWI BULAN', 'moonafic', 2022, 10, 50000), 
('Pengembaraan Sang Alien di Galaxy yang luas', 'ioforia', 2019, 15, 50000), 
('Keseharian penyihir Tupai', 'Risuners', 2021, 8, 55000), 
('Kebangkitan Sang Zombie Gila', 'zomrade', 2023, 12, 50000), 
('Terbukanya Segel Keris Kuno', 'Melfriends', 2020, 5, 60000);

SELECT * FROM buku 
WHERE tahun > 2020
ORDER BY judul ASC;

SELECT * FROM buku 
WHERE judul LIKE '%DEW%';

UPDATE buku 
SET stok = 10 
WHERE id = 2;

DELETE FROM buku
WHERE id=5;
