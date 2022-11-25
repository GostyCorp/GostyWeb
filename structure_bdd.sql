-- DROP SCHEMA dbo;

CREATE SCHEMA dbo;
-- lolyData.dbo.STATUS definition

-- Drop table

-- DROP TABLE lolyData.dbo.STATUS;

CREATE TABLE lolyData.dbo.STATUS (
	id int IDENTITY(0,1) NOT NULL,
	userId int NOT NULL,
	statut varchar(100) COLLATE French_CI_AS NOT NULL,
	vip varchar(100) COLLATE French_CI_AS NOT NULL
);


-- lolyData.dbo.TCHAT definition

-- Drop table

-- DROP TABLE lolyData.dbo.TCHAT;

CREATE TABLE lolyData.dbo.TCHAT (
	id int IDENTITY(0,1) NOT NULL,
	userId int NOT NULL,
	message varchar(MAX) COLLATE French_100_CS_AS_KS_SC_UTF8 NULL,
	[date] datetime NOT NULL
);


-- lolyData.dbo.USERS definition

-- Drop table

-- DROP TABLE lolyData.dbo.USERS;

CREATE TABLE lolyData.dbo.USERS (
	id int IDENTITY(0,1) NOT NULL,
	name varchar(30) COLLATE French_CI_AS NOT NULL,
	pwd varchar(100) COLLATE French_CI_AS NOT NULL,
	email varchar(50) COLLATE French_CI_AS NOT NULL
);
