use yicheng;

drop table if exists theater;
CREATE TABLE IF NOT EXISTS theater (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	manager VARCHAR(20),
	province VARCHAR(20),
	city VARCHAR(20),
	address VARCHAR(100), #
	investment_volume INT, # wan cny
	state VARCHAR(20), # plan, under construction, open, close
	PRIMARY KEY(id)
);

insert into theater(manager, name, province, city, address,investment_volume,state) values
("Xiaoming Zhang", "Mega Cineplex (Zhongguancun)", "Beijing", "Beijing", "Zhongguancun plaza shopping center", 1000, "open"),
("Keke Han", "Mega Cineplex (Sanlitun)", "Beijing", "Beijing", "Sanlitun village", 1500, "open");
