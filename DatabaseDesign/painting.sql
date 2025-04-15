CREATE TABLE painting
 (
  paintID int(6) ,
  artist varchar(20) ,
  year int(6) ,
  title char(30) ,
  description char(20) ,
  type char(8) ,
  materiaL char(2) ,
  style char(15) 

  );




INSERT INTO painting (paintID, artist, year, title, description, type, material, style) VALUES
(101, 'Jackson Pollock',1943,'Mural','several human figures walking','oil','canvas','abstract'),
(202,'Vsilij Kandinskij',1925,'Yellow,Red,Blu','geometrical shapes','oil','canvas','abstract'),
(303,'Pablo Picasso',1937,'Guernica','Bombing of Guernica','oil','canvas','Cubism'),
(404,'Henri Matisse',1912,'Goldfish','Animal Painting','oil','canvas','post-impressionism'),
(505,'Vincent van Gogh',1889,'Irises','Iries Garden','oil','canvas','impressionism'),
(606,'Claude Monet',1873,'Les Coquelicots', 'Poppies Garden','oil','canvas','impressionism'),
(707,'Salvador Dali',1944,'Dream Caused by the Flight of a Bee', 'hand-painted dream photograph','oil','wood','surrealism'),
(808,'Rene Magritte',2010,'Les amants','Two lovers kissing with the head covered','oil','canvas','surrealism'),
(909,'Rene Magritte', 1929,'The Treachery of Images','This Is Not a Pipe','oil','canvas','surrealism'),
(1000,'Max Ernst',1927,'Forest and Dove','bizarre, abstract trees','oil','canvas','surrealism');

