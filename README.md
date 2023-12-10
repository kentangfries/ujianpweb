#buat database
CREATE DATABASE gudang;

USE gudang;

#membuat tabel barang

CREATE TABLE barang (

	id INT PRIMARY KEY AUTO_INCREMENT,
    
	nama_barang VARCHAR(255) NOT NULL,
    
	stok INT NOT NULL,
    
	harga DECIMAL(10, 2) NOT NULL
);
