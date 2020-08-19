-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: dbuts
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_jurusan`
--

DROP TABLE IF EXISTS `t_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_jurusan` (
  `ID_Jurusan` char(1) NOT NULL,
  `Nama` char(5) NOT NULL,
  `Informasi` char(40) DEFAULT NULL,
  PRIMARY KEY (`ID_Jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_jurusan`
--

LOCK TABLES `t_jurusan` WRITE;
/*!40000 ALTER TABLE `t_jurusan` DISABLE KEYS */;
INSERT INTO `t_jurusan` VALUES ('1','IPA','Ilmu Pengetahuan Alam'),('2','IPS','Ilmu Pengetahuan Sosial');
/*!40000 ALTER TABLE `t_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_kelas`
--

DROP TABLE IF EXISTS `t_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_kelas` (
  `ID_Kelas` char(6) NOT NULL,
  `Nama` char(15) NOT NULL,
  `Jumlah_Siswa` int(2) NOT NULL,
  `Jurusan` char(1) NOT NULL,
  `NIP_WaliKelas` char(16) NOT NULL,
  PRIMARY KEY (`ID_Kelas`),
  KEY `FK_JurusanKelas` (`Jurusan`),
  KEY `FK_Walikelas` (`NIP_WaliKelas`),
  CONSTRAINT `FK_JurusanKelas` FOREIGN KEY (`Jurusan`) REFERENCES `t_jurusan` (`ID_Jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_Walikelas` FOREIGN KEY (`NIP_WaliKelas`) REFERENCES `t_pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_kelas`
--

LOCK TABLES `t_kelas` WRITE;
/*!40000 ALTER TABLE `t_kelas` DISABLE KEYS */;
INSERT INTO `t_kelas` VALUES ('011202','XII IPA 1',1,'1','1988011220000301'),('021101','XI IPS 1',1,'2','1982013219920305');
/*!40000 ALTER TABLE `t_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_nilai`
--

DROP TABLE IF EXISTS `t_nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_nilai` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `ID_Pelajaran` char(6) NOT NULL,
  `NISN` char(10) NOT NULL,
  `Nilai` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Pelajaran` (`ID_Pelajaran`),
  KEY `FK_NilaiSiswa` (`NISN`),
  CONSTRAINT `FK_NilaiSiswa` FOREIGN KEY (`NISN`) REFERENCES `t_siswa` (`NISN`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_Pelajaran` FOREIGN KEY (`ID_Pelajaran`) REFERENCES `t_pelajaran` (`ID_Pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_nilai`
--

LOCK TABLES `t_nilai` WRITE;
/*!40000 ALTER TABLE `t_nilai` DISABLE KEYS */;
INSERT INTO `t_nilai` VALUES (1,'101182','1011181231',100),(2,'101183','1011181232',90),(3,'101182','1011181232',80),(4,'101183','1011181231',80);
/*!40000 ALTER TABLE `t_nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pegawai`
--

DROP TABLE IF EXISTS `t_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_pegawai` (
  `NIP` char(16) NOT NULL,
  `Nama` char(30) NOT NULL,
  `Alamat` char(30) NOT NULL,
  `Nomor_Telepon` char(13) NOT NULL,
  `Jenis_Kelamin` char(1) NOT NULL,
  `Jabatan` char(20) NOT NULL,
  `Golongan` char(5) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pegawai`
--

LOCK TABLES `t_pegawai` WRITE;
/*!40000 ALTER TABLE `t_pegawai` DISABLE KEYS */;
INSERT INTO `t_pegawai` VALUES ('1982013219920305','Hinata','Jalan Cangkuang','082318994151','P','Guru','III'),('1988011220000301','Naruto','Jalan Cimunding','082318994116','L','Kepala Sekolah','IV');
/*!40000 ALTER TABLE `t_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pelajaran`
--

DROP TABLE IF EXISTS `t_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_pelajaran` (
  `ID_Pelajaran` char(6) NOT NULL,
  `Nama` char(30) NOT NULL,
  `NIP_Pengajar` char(16) NOT NULL,
  `ID_Nilai` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_Pelajaran`,`ID_Nilai`),
  KEY `FK_Guru` (`NIP_Pengajar`),
  KEY `ID_Nilai` (`ID_Nilai`),
  CONSTRAINT `FK_Guru` FOREIGN KEY (`NIP_Pengajar`) REFERENCES `t_pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pelajaran`
--

LOCK TABLES `t_pelajaran` WRITE;
/*!40000 ALTER TABLE `t_pelajaran` DISABLE KEYS */;
INSERT INTO `t_pelajaran` VALUES ('101182','Matematika','1988011220000301',1),('101183','Fisika','1982013219920305',2);
/*!40000 ALTER TABLE `t_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pendaftar`
--

DROP TABLE IF EXISTS `t_pendaftar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_pendaftar` (
  `NIK` char(16) NOT NULL,
  `Nama` char(30) NOT NULL,
  `Alamat` char(30) NOT NULL,
  `Nomor_Telepon` char(13) NOT NULL,
  `Jenis_Kelamin` char(1) NOT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pendaftar`
--

LOCK TABLES `t_pendaftar` WRITE;
/*!40000 ALTER TABLE `t_pendaftar` DISABLE KEYS */;
INSERT INTO `t_pendaftar` VALUES ('1959231708900003','Sakura','Jalan Konohagakure No 5','082318221235','P'),('1959241708900001','Uciha','Jalan Konohagakure No 3','082318991234','L');
/*!40000 ALTER TABLE `t_pendaftar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_sekolah`
--

DROP TABLE IF EXISTS `t_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_sekolah` (
  `ID_Sekolah` char(6) NOT NULL,
  `Nama` char(30) NOT NULL,
  `Alamat` char(30) NOT NULL,
  `Nomor_Telepon` char(13) NOT NULL,
  `NIP_KepalaSekolah` char(16) NOT NULL,
  PRIMARY KEY (`ID_Sekolah`),
  KEY `FK_Kepsek` (`NIP_KepalaSekolah`),
  CONSTRAINT `FK_Kepsek` FOREIGN KEY (`NIP_KepalaSekolah`) REFERENCES `t_pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_sekolah`
--

LOCK TABLES `t_sekolah` WRITE;
/*!40000 ALTER TABLE `t_sekolah` DISABLE KEYS */;
INSERT INTO `t_sekolah` VALUES ('002011','SMAN 2 Dua Garut','Jalan Beledug','082318994116','1988011220000301');
/*!40000 ALTER TABLE `t_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_siswa`
--

DROP TABLE IF EXISTS `t_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_siswa` (
  `NISN` char(10) NOT NULL,
  `NIS` char(10) NOT NULL,
  `NIK` char(16) NOT NULL,
  `Jurusan` char(1) NOT NULL,
  `ID_Kelas` char(6) NOT NULL,
  PRIMARY KEY (`NISN`),
  KEY `FK_NIK` (`NIK`),
  KEY `FK_JurusanSiswa` (`Jurusan`),
  KEY `FK_KelasSiswa` (`ID_Kelas`),
  CONSTRAINT `FK_JurusanSiswa` FOREIGN KEY (`Jurusan`) REFERENCES `t_jurusan` (`ID_Jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_KelasSiswa` FOREIGN KEY (`ID_Kelas`) REFERENCES `t_kelas` (`ID_Kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_NIK` FOREIGN KEY (`NIK`) REFERENCES `t_pendaftar` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_siswa`
--

LOCK TABLES `t_siswa` WRITE;
/*!40000 ALTER TABLE `t_siswa` DISABLE KEYS */;
INSERT INTO `t_siswa` VALUES ('1011181231','2020090001','1959241708900001','1','011202'),('1011181232','2020090002','1959231708900003','2','021101');
/*!40000 ALTER TABLE `t_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Adminstrator','admin','admin'),(2,'Giwan Gunawan','giwan91','giwan910');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-20  1:19:02
