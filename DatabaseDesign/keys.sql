ALTER TABLE painting ADD CONSTRAINT pk_painting_paintID PRIMARY KEY (paintID);

ALTER TABLE artist ADD CONSTRAINT pk_artist_artistName PRIMARY KEY (artistName);

ALTER TABLE painting ADD CONSTRAINT fk_painting_artistName FOREIGN KEY (artistName) REFERENCES artist(artistName)
--ALTER TABLE `painting` ADD CONSTRAINT `fk_painting_artistName` FOREIGN KEY (`artistName`) REFERENCES `artist`(`artistName`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE internalCollection ADD CONSTRAINT pk_internalCollection_permanentCollectionId PRIMARY KEY (permanentCollectionId);

ALTER TABLE borrowedCollection ADD CONSTRAINT fk_borrowedCollection_paintID FOREIGN KEY (paintID) REFERENCES painting(paintID)
--ALTER TABLE `borrowedCollection` ADD CONSTRAINT `fk_borrowedCollection_paintID` FOREIGN KEY (`paintID`) REFERENCES `painting`(`paintID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE borrowedCollection ADD CONSTRAINT pk_borrowedCollection_externalMuseumId PRIMARY KEY (externalMuseumId);

ALTER TABLE internalCollection ADD CONSTRAINT fk_internalCollection_paintID FOREIGN KEY (paintID) REFERENCES painting(paintID)

--ALTER TABLE `internalCollection` ADD CONSTRAINT `fk_internalCollection_paintID` FOREIGN KEY (`paintID`) REFERENCES `painting`(`paintID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE exhibition ADD CONSTRAINT pk_exhibition_exhibitionId PRIMARY KEY (exhibitionId);

