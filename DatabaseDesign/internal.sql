CREATE TABLE internalCollection
(
  permanentCollectionId int(5) ,
  cost decimal(10,2) ,
  display varchar(20) ,
  dateAcquisition date ,
  store varchar(10) ,
  paintID int(6) 

);


INSERT INTO internalCollection (permanentCollectionID, cost, display, dateAcquisition, store ,paintID) VALUES
(2009, 5055.22, 'Main Room', STR_TO_DATE('01-02-2001','%d-%m-%Y'), 'notInStore',101),
(2010, 8088.34, 'Main Room', STR_TO_DATE('01-02-2003','%d-%m-%Y'), 'notInStore',202),
(2011, 1000.12, 'not displayed', STR_TO_DATE('01-02-2005','%d-%m-%Y'), 'inStore',303),
(2015, 10057.89, 'not displayed',STR_TO_DATE ('01-02-1995','%d-%m-%Y'), 'inStore',404),
(2021, 9999.99, 'Main Room', STR_TO_DATE('01-02-2010','%d-%m-%Y'), 'notInStored',505);