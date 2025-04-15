CREATE TABLE borrowed_collection 
(
  externalMuseumId int(5) ,
  museumName char(14) ,
  BorrowDate date ,
  returnDate date ,
  paintID int(6) 

);



INSERT INTO borrowed_collection (externalMuseumId, museumName, borrowDate, returnDate, paintID) VALUES
(21, 'Paris Museum', STR_TO_DATE('01-02-2001','%d-%m-%Y'), STR_TO_DATE('10-10-2022','%d-%m-%Y'),606),
(22, 'Paris Museum', STR_TO_DATE('01-03-2015','%d-%m-%Y'),STR_TO_DATE ('31-12-2021','%d-%m-%Y'),707),
(23, 'Belgium Museum', STR_TO_DATE('03-07-2019','%d-%m-%Y'), STR_TO_DATE('10-10-2024','%d-%m-%Y'),808),
(24, 'Rome Museum', STR_TO_DATE('13-02-2001','%d-%m-%Y'), STR_TO_DATE('12-11-2022','%d-%m-%Y'),909),
(25, 'Berlin Museum', STR_TO_DATE('09-02-2005','%d-%m-%Y'),STR_TO_DATE ('10-10-2035','%d-%m-%Y'),1000);
