#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: traveller
#------------------------------------------------------------

CREATE TABLE traveller(
        id_traveller       Int  Auto_increment  NOT NULL ,
        subscription_type  Varchar (50) NOT NULL ,
        date               Date NOT NULL ,
        time               Time NOT NULL
	,CONSTRAINT traveller_PK PRIMARY KEY (id_traveller)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: delay 
#------------------------------------------------------------

CREATE TABLE delay(
        id_delay      Int  Auto_increment  NOT NULL ,
        date          Date NOT NULL ,
        arrival_hour  Time NOT NULL ,
        stop          Varchar (50) NOT NULL ,
        expected_hour Time NOT NULL ,
        line          Varchar (50) NOT NULL
	,CONSTRAINT delay_PK PRIMARY KEY (id_delay)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fraud 
#------------------------------------------------------------

CREATE TABLE fraud(
        id_Fraud    Int  Auto_increment  NOT NULL ,
        passenger   Varchar (3) NOT NULL ,
        registered  Varchar (3) NOT NULL ,
        time        Time NOT NULL ,
        date        Date NOT NULL,
        line          Varchar (50) NOT NULL
	,CONSTRAINT fraud_PK PRIMARY KEY (id_Fraud)
)ENGINE=InnoDB;

