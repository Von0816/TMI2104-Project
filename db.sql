
CREATE TABLE admin (
	adminID int(16) NOT NULL AUTO_INCREMENT,
	adminUsername varchar(64) NOT NULL,
	adminPassword varchar(64) NOT NULL,
	PRIMARY KEY (adminID)
);

CREATE TABLE member (
    memberID int(16) NOT NULL AUTO_INCREMENT,
    memberUsername varchar(64) NOT NULL,
    memberName varchar(64) NOT NULL,
    memberGender varchar(10) NOT NULL,
    memberAddress varchar(200) NOT NULL,
    memberEmail varchar(64) NOT NULL,
    memberHP varchar(15) NOT NULL,
    memberPassword varchar(64) NOT NULL,
    PRIMARY KEY (memberID)
);

CREATE TABLE car (
    carID int(16),
    carName varchar(126) NOT NULL,
    carPrice float(10,2) NOT NULL,
    carBody varchar(126) NOT NULL,
    carTrim varchar(126) NOT NULL,
    carFuel varchar(64) NOT NULL,
    carBHP int(255) NOT NULL,
    carGearBox varchar(64) NOT NULL,
    carPaint varchar(64) NOT NULL,
    carTerm varchar(10) NOT NULL,
    carMonthlyRate float(10,2) NOT NULL,
    PRIMARY KEY (carID)
);

CREATE TABLE booking (
	bookingID int(16) NOT NULL AUTO_INCREMENT,
    memberID int(16) NOT NULL,
    carID int(16) NOT NULL,
    bookingDate date NOT NULL,
    bookingTime time NOT NULL,
    bookingStatus varchar(20) NOT NULL,
	PRIMARY KEY (bookingID),
	FOREIGN KEY (memberID) REFERENCES member(memberID),
    FOREIGN KEY (carID) REFERENCES car(carID)
);

CREATE TABLE payment (
	paymentID int(16) NOT NULL AUTO_INCREMENT,
    bookingID int(16) NOT NULL,
    paymentDateTime datetime NOT NULL,
    paymentMethod varchar(16) NOT NULL,
    billing_fName varchar(64) NOT NULL,
    billing_lName varchar(64) NOT NULL,
    billing_email varchar(64) NOT NULL,
    billing_addr varchar(100) NOT NULL,
    billing_city varchar(64) NOT NULL,
    billing_state varchar(64) NOT NULL,
    nameOnCard varchar(100) NOT NULL,
    cardNum varchar(64) NOT NULL,
    cardEXPmonth varchar(64) NOT NULL,
    cardEXPyear varchar(64) NOT NULL,
    card_CVV varchar(64) NOT NULL,
	PRIMARY KEY (paymentID),
	FOREIGN KEY (bookingID) REFERENCES booking(bookingID)
);
