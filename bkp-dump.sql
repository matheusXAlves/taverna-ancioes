-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (x86_64)
--
-- Host: mysql    Database: taverna_ancioes
-- ------------------------------------------------------
-- Server version	5.7.21
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO,POSTGRESQL' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table "imagem_evento"
--

DROP TABLE IF EXISTS "imagem_evento";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "imagem_evento" (
  "id_imagem" int(11) NOT NULL,
  "imagem_evento" blob NOT NULL,
  "id_eventos" int(11) NOT NULL,
  PRIMARY KEY ("id_imagem"),
  KEY "fk_imagem_evento_tb_eventos1_idx" ("id_eventos"),
  CONSTRAINT "fk_imagem_evento_tb_eventos1" FOREIGN KEY ("id_eventos") REFERENCES "tb_eventos" ("id_eventos") ON DELETE NO ACTION ON UPDATE NO ACTION
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "imagem_evento"
--

LOCK TABLES "imagem_evento" WRITE;
/*!40000 ALTER TABLE "imagem_evento" DISABLE KEYS */;
/*!40000 ALTER TABLE "imagem_evento" ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table "imagem_grupo"
--

DROP TABLE IF EXISTS "imagem_grupo";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "imagem_grupo" (
  "id_imagem" int(11) NOT NULL,
  "imagem_grupo" blob NOT NULL,
  "id_grupo" int(11) NOT NULL,
  PRIMARY KEY ("id_imagem","id_grupo"),
  KEY "fk_imagem_grupo_tb_grupo_idx" ("id_grupo"),
  CONSTRAINT "fk_imagem_grupo_tb_grupo" FOREIGN KEY ("id_grupo") REFERENCES "tb_grupo" ("idtb_grupo") ON DELETE NO ACTION ON UPDATE NO ACTION
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "imagem_grupo"
--

LOCK TABLES "imagem_grupo" WRITE;
/*!40000 ALTER TABLE "imagem_grupo" DISABLE KEYS */;
/*!40000 ALTER TABLE "imagem_grupo" ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table "imagem_usuario"
--

DROP TABLE IF EXISTS "imagem_usuario";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "imagem_usuario" (
  "id_imagem_usuario" int(11) NOT NULL,
  "imagem_usuario" blob NOT NULL,
  "id_usuario" int(11) NOT NULL,
  PRIMARY KEY ("id_imagem_usuario"),
  KEY "fk_imagem_usuario_tb_usuario1_idx" ("id_usuario"),
  CONSTRAINT "fk_imagem_usuario_tb_usuario1" FOREIGN KEY ("id_usuario") REFERENCES "tb_usuario" ("id_usuario") ON DELETE NO ACTION ON UPDATE NO ACTION
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "imagem_usuario"
--

LOCK TABLES "imagem_usuario" WRITE;
/*!40000 ALTER TABLE "imagem_usuario" DISABLE KEYS */;
/*!40000 ALTER TABLE "imagem_usuario" ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table "tb_eventos"
--

DROP TABLE IF EXISTS "tb_eventos";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "tb_eventos" (
  "id_eventos" int(11) NOT NULL,
  "nme_evento" varchar(50) NOT NULL,
  "dta_evento" date NOT NULL,
  "horario_evento" datetime NOT NULL,
  "info_evento" text NOT NULL,
  "idtb_grupo" int(11) NOT NULL,
  PRIMARY KEY ("id_eventos"),
  KEY "fk_tb_eventos_tb_grupo1_idx" ("idtb_grupo"),
  CONSTRAINT "fk_tb_eventos_tb_grupo1" FOREIGN KEY ("idtb_grupo") REFERENCES "tb_grupo" ("idtb_grupo") ON DELETE NO ACTION ON UPDATE NO ACTION
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "tb_eventos"
--

LOCK TABLES "tb_eventos" WRITE;
/*!40000 ALTER TABLE "tb_eventos" DISABLE KEYS */;
/*!40000 ALTER TABLE "tb_eventos" ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table "tb_grupo"
--

DROP TABLE IF EXISTS "tb_grupo";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "tb_grupo" (
  "idtb_grupo" int(11) NOT NULL,
  "nme_grupo" varchar(100) NOT NULL,
  "info_grupo" text,
  "id_usuario" int(11) NOT NULL,
  "nme_jogo" varchar(50) NOT NULL,
  "tipo_jogo" varchar(45) NOT NULL,
  PRIMARY KEY ("idtb_grupo"),
  KEY "fk_tb_grupo_tb_usuario1_idx" ("id_usuario"),
  CONSTRAINT "fk_tb_grupo_tb_usuario1" FOREIGN KEY ("id_usuario") REFERENCES "tb_usuario" ("id_usuario") ON DELETE NO ACTION ON UPDATE NO ACTION
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "tb_grupo"
--

LOCK TABLES "tb_grupo" WRITE;
/*!40000 ALTER TABLE "tb_grupo" DISABLE KEYS */;
INSERT INTO "tb_grupo" VALUES (2,'SADFASDF','ASDFASDF',1,'TORMENTA','VISUAL'),(3,'xcvzxcbzvxc','xcvzxcvzvc',1,'TORMENTA','VISUAL'),(4,'dsfasdf','asdfsadf',1,'TORMENTA','VISUAL'),(5,'iopuiopuio','uiopuiopiuop',1,'TORMENTA','VISUAL');
/*!40000 ALTER TABLE "tb_grupo" ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table "tb_usuario"
--

DROP TABLE IF EXISTS "tb_usuario";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "tb_usuario" (
  "id_usuario" int(11) NOT NULL,
  "nme_usuario" varchar(50) NOT NULL,
  "email_usuario" varchar(100) NOT NULL,
  "login_usuario" varchar(45) NOT NULL,
  "senha_usuario" varchar(45) NOT NULL,
  PRIMARY KEY ("id_usuario")
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table "tb_usuario"
--

LOCK TABLES "tb_usuario" WRITE;
/*!40000 ALTER TABLE "tb_usuario" DISABLE KEYS */;
INSERT INTO "tb_usuario" VALUES (1,'Teste','teste@teste.com','teste','teste');
/*!40000 ALTER TABLE "tb_usuario" ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-16 19:55:03
