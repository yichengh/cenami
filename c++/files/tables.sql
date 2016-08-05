use yicheng;

drop table seat_sold;
drop table showing;
drop table staff;
drop table theater;

CREATE TABLE IF NOT EXISTS theater (
	id INT,
	name VARCHAR(100),
	address VARCHAR(200), #
	tel VARCHAR(200), #
	region_id INT, # 
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS staff (
	id INT AUTO_INCREMENT,
	name VARCHAR(100),
	gender VARCHAR(10),
	rank VARCHAR(20),
	position VARCHAR(20),
	theater_id INT, # 
	PRIMARY KEY(id),
	foreign key(theater_id) references theater(id)
);

CREATE TABLE IF NOT EXISTS region (
	id INT,
	name VARCHAR(100),
	manager_id INT,
	PRIMARY key(id)
);


#insert into theater(manager, name, province, city, address,investment_volume,state) values
#("Xiaoming Zhang", "Mega Cineplex (Zhongguancun)", "Beijing", "Beijing", "Zhongguancun plaza shopping center", 1000, "open"),
#("Keke Han", "Mega Cineplex (Sanlitun)", "Beijing", "Beijing", "Sanlitun village", 1500, "open");

CREATE TABLE IF NOT EXISTS movie (
	id INT NOT NULL,
	original_title VARCHAR(100),
	chinese_title VARCHAR(30),
	directors VARCHAR(100),
	casts VARCHAR(100),
	countries VARCHAR(40),
	genres VARCHAR(40),
	rating FLOAT,
	image_medium VARCHAR(100),
	image_large VARCHAR(100),
	summary VARCHAR(2000),
	released_date date,
	per_cost FLOAT,
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS showing (
	id INT NOT NULL AUTO_INCREMENT,
	movie_id int not null,
	theater_id int not null,
	start_time DATETIME,
	end_time DATETIME,
	price FLOAT,
	PRIMARY KEY(id),
	foreign key(movie_id) references movie(id),
	foreign key(theater_id) references theater(id)
);

CREATE TABLE IF NOT EXISTS seat_sold (
	showing_id int not null,
	x int not null,
	y int not null,
	foreign key(showing_id) references showing(id)
);

#insert into seat_sold values(6, 6, 6),(6, 6, 7),(6, 6, 8);