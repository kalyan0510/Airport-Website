CREATE database IF NOT EXISTS Airport;
USE Airport;
CREATE TABLE plane(
	plane_id  int ,
	service_years int,
	serviced_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	color varchar(10),
	PRIMARY KEY(plane_id)
);
CREATE TABLE plane_type(
	model_id int,
	model_name varchar(20),
	weight double,
	PRIMARY KEY(model_id)
);
CREATE TABLE cargo(
	model_id int,
	load_capacity double,
	load_height double,
	load_breadth double,
	load_lenght double,
	PRIMARY KEY(model_id),
	FOREIGN KEY (model_id) references plane_type(model_id)
);
CREATE TABLE passenger_plane(
	model_id int,
	busi_class_capacity int,
	eco_class_capacity int,
	PRIMARY KEY(model_id),
	FOREIGN KEY (model_id) references plane_type(model_id)
);
CREATE TABLE typeR(
	model_id int,
	plane_id int,
	FOREIGN KEY (model_id) REFERENCES plane_type(model_id),
	FOREIGN KEY (plane_id) REFERENCES plane(plane_id)
);





/* 101 110 */
CREATE TABLE airlines(
	airline_id int,
	airline_name varchar(20),
	fleet_size int,
	PRIMARY KEY(airline_id)
);
/*//////////////////////////////*/
CREATE TABLE Service_counter(
		counter_id int,
		airline_id int,
		UNIQUE(counter_id),
		FOREIGN KEY (airline_id) REFERENCES airlines(airline_id)
);
CREATE TABLE owns(
	plane_id int,
	airline_id int,
	constraint u_plane_id UNIQUE(plane_id),
	FOREIGN KEY (plane_id) REFERENCES plane(plane_id),
	FOREIGN KEY (airline_id) REFERENCES airlines(airline_id)
);
CREATE TABLE journey(
	journey_id int,
	destination varchar(20),
	arrival TIME,
	departure TIME,
	
	delay int,
	PRIMARY KEY(journey_id)
);

CREATE TABLE services(
	service_id int,
	plane_id int,
	journey_id int,
	PRIMARY KEY(service_id),
	FOREIGN KEY (plane_id) REFERENCES plane(plane_id)
);
CREATE TABLE service_availability(
	service_id int,
	day_avail varchar(9),
	FOREIGN KEY (service_id) REFERENCES services(service_id)
);
CREATE TABLE person(
	person_id int,
	name varchar(20),
	gender varchar(6),
	age int,
	phone varchar(10),
	street varchar(20),
	city varchar(10),
	country varchar(20),
	email varchar(25),
	PRIMARY KEY(person_id)
);
CREATE TABLE airhostess(
	AH_id int,
	salary double,
	PRIMARY KEY(AH_id)
);
CREATE TABLE pilot(
	pilot_id int,
	salary double,
	experience int,
	PRIMARY KEY(pilot_id)
);
CREATE TABLE ticket_agentgent(
	TA_id int,
	salary double,
	experience int,
	PRIMARY KEY(TA_id)
);
CREATE TABLE director(
	director_id int,
	salary double,
	experience int,
	PRIMARY KEY(director_id)
);
CREATE TABLE AH_details(
	AH_id int ,
	person_id int,
	FOREIGN KEY (AH_id) REFERENCES airhostess(AH_id),
	FOREIGN KEY (person_id) REFERENCES person(person_id)
);
CREATE TABLE TA_details(
	TA_id int ,
	person_id int,
	FOREIGN KEY (TA_id) REFERENCES ticket_agentgent(TA_id),
	FOREIGN KEY (person_id) REFERENCES person(person_id)
);
CREATE TABLE pilot_details(
	pilot_id int ,
	person_id int,
	FOREIGN KEY (pilot_id) REFERENCES pilot(pilot_id),
	FOREIGN KEY (person_id) REFERENCES person(person_id)
);
CREATE TABLE director_details(
	director_id int ,
	person_id int,
	FOREIGN KEY (director_id) REFERENCES director(director_id),
	FOREIGN KEY (person_id) REFERENCES person(person_id)
);
CREATE TABLE flies(
	plane_id int,
	pilot_id int,
	FOREIGN KEY (pilot_id) REFERENCES pilot(pilot_id),
	FOREIGN KEY (plane_id) REFERENCES plane(plane_id)
);
CREATE TABLE AH_of(
	AH_id int,
	airline_id int,
	FOREIGN KEY (AH_id) REFERENCES airhostess(AH_id),
	FOREIGN KEY (airline_id) REFERENCES airlines(airline_id)
);
CREATE TABLE TA_of(
	TA_id int,
	airline_id int,
	FOREIGN KEY (airline_id) REFERENCES airlines(airline_id),
	FOREIGN KEY (TA_id) REFERENCES ticket_agentgent(TA_id)
);

CREATE TABLE `complaints` (
  `comp_no` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `_Body` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`comp_no`)
) ;

CREATE TABLE `security_staff` (
  `ss_id` int(11) NOT NULL DEFAULT '0',
  `salary` double DEFAULT NULL,
  PRIMARY KEY (`ss_id`)
);

CREATE TABLE `ss_details` (
  `ss_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  KEY `ss_id` (`ss_id`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `ss_details_ibfk_1` FOREIGN KEY (`ss_id`) REFERENCES `security_staff` (`ss_id`),
  CONSTRAINT `ss_details_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`person_id`)
);








