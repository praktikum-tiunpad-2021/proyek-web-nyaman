CREATE TABLE `reservasi_hotel`.`tamu` ( `Id_Tamu` INT(5) NOT NULL , `Nama` VARCHAR(50) NOT NULL , `No_HP` VARCHAR(12) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Alamat` VARCHAR(50) NOT NULL ) ENGINE = InnoDB
ALTER TABLE `tamu` ADD PRIMARY KEY(`Id_Tamu`);

CREATE TABLE `reservasi_hotel`.`kamar` ( `no_kamar` INT(3) NOT NULL , `jenis` VARCHAR(20) NOT NULL , `harga` INT NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `kamar` ADD PRIMARY KEY(`no_kamar`);

CREATE TABLE `reservasi_hotel`.`reservasi` ( `id_reservasi` INT(5) NOT NULL , `id_tamu` INT(5) NOT NULL , `no_kamar` INT(3) NOT NULL , `checkin` DATE NOT NULL , `checkout` DATE NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `reservasi` ADD PRIMARY KEY(`id_reservasi`);
ALTER TABLE reservasi
    ADD CONSTRAINT fk_id_tamu
    FOREIGN KEY (id_tamu)
    REFERENCES tamu(Id_tamu);
    ALTER TABLE reservasi
    ADD CONSTRAINT fk_no_kamar
    FOREIGN KEY (no_kamar)
    REFERENCES kamar(no_kamar);