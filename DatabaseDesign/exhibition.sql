CREATE TABLE exhibition
(
  exhibitionId int(5) ,
  name char(14) ,
  startDate date ,
  endDate date ,
  display varchar(10),
  paintID int(6) 
);



INSERT INTO exhibition (exhibitionId, name, startDate, endDate,paintID) VALUES
(501, 'summer', STR_TO_DATE('05-06-2021','%d-%m-%Y'), STR_TO_DATE('12-12-2021','%d-%m-%Y'),101),
(809,  'winter', STR_TO_DATE('10-07-2022','%d-%m-%Y'), STR_TO_DATE('13-12-2022','%d-%m-%Y'),202),
(407, 'winter', STR_TO_DATE('14-02-2021','%d-%m-%Y'),STR_TO_DATE ('14-12-2021','%d-%m-%Y'),503),
(302, 'autumn', STR_TO_DATE('16-02-2021','%d-%m-%Y'), STR_TO_DATE('16-12-2021','%d-%m-%Y'),808),
(999, 'spring', STR_TO_DATE('19-02-2021','%d-%m-%Y'), STR_TO_DATE('17-12-2021','%d-%m-%Y'),1000);


