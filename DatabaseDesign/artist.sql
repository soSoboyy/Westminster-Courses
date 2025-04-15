CREATE TABLE artist 
(
  name varchar(30) ,
  country varchar(15) ,
  era varchar(10) ,
  DateOfBirth date,
  DateOfDeath date,
  main_style varchar(15) ,
  description varchar(32) 
 
 );



INSERT INTO artist (name, country,era,  DateOfBirth ,DateOfDeath , main_style, description) VALUES
('Jackson Pollock','USA','twentieth century',STR_TO_DATE('01-01-1912','%d-%m-%Y'), STR_TO_DATE('11-08-1956','%d-%m-%Y'), 'abstract expressionism ','drip technique'),
('Vsilij Kandinskij','Russia','twentieth century',STR_TO_DATE('16-12-1866','%d-%m-%Y'), STR_TO_DATE('13-12-1944','%d-%m-%Y'), 'spiritual abstraction','pioneer of abstract art'),
('Pablo Picasso','Spain','twentieth century',STR_TO_DATE('25-10-1881','%d-%m-%Y'),STR_TO_DATE('08-04-1973','%d-%m-%Y'),'proto-cubist','pioneer of modern art'),
('Henri Matisse','France','twentieth century',STR_TO_DATE('31-12-1869','%d-%m-%Y'),STR_TO_DATE('03-11-1954','%d-%m-%Y'),'fauvism','revolutionary developments in the visual arts'),
('Vincent van Gogh','Netherlands','nineteenth century',STR_TO_DATE('30-03-1853','%d-%m-%Y'),STR_TO_DATE('29-07-1890','%d-%m-%Y'),'post-impressionism','most famous and influential figures in Western art history'),
('Claude Monet','France','nineteenth century',STR_TO_DATE('14-11-1840','%d-%m-%Y'),STR_TO_DATE('05-12-1926','%d-%m-%Y'),'impressionism','the most consistent and prolific practitioner of impressionism s philosophy'),
('Rene Magritte','Belgium','twentieth century',STR_TO_DATE('21-11-1989','%d-%m-%Y'),STR_TO_DATE('15-08-1967','%d-%m-%Y'),'surrealism','his work is known for challenging observers preconditioned perceptions of reality'),
('Max Ernst','Germany','twentieth century',STR_TO_DATE('02-04-1891','%d-%m-%Y'),STR_TO_DATE('01-04-1976','%d-%m-%Y'),'Dada','primary pioneer of the Dada movement and surrealism');
