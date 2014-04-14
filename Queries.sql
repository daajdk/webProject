/*Change customer info*/
create procedure changeCustomerName(custID int, newfname varchar(25), newlname varchar(25))
       BEGIN
	UPDATE customer
	SET fname = newfname, lname = newlname
	WHERE customerID = custID
       END;
create procedure changeCustomerCity(custID int, newcity varchar (50))
       BEGIN
	UPDATE customer
	SET customercity = newcity
	WHERE customerID = custID
       END;
create procedure changeCustomerPhone(custID int, newphone varchar (10))
       BEGIN
        UPDATE customer
        SET phone = newphone
        WHERE customerID = custID
       END;
/*add new customer*/
create procedure addNewCustomer(custID char(10), firstname varchar(25), lastname varchar(25), 
       		 		ccity varchar(50), cphone char(10))
       BEGIN
	INSERT 
	INTO customer(customerID, fname, lname, customercity, customerphone)
	VALUES (custID, firstname, lastname, ccity, cphone 
       END;
/*delete customer*/
create procedure deleteCustomer(custID char(10))
       BEGIN
	DELETE 
	FROM customer
	WHERE customerID = custID
       END;
	
/*change supplier info*/
create procedure changeSupplierName(suppID char(10), newname varchar (25))
       BEGIN
        UPDATE supplier
        SET sname = newname
        WHERE supplierID = suppID
       END;
create procedure changeSupplierCity(suppID char(10), newcity varchar (50))
       BEGIN
        UPDATE supplier
       	SET suppliercity = newcity
       	WHERE supplierID = suppID
       END;
create procedure changeSupplierPhone(suppID char(10), newphone varchar (10))
       BEGIN
	UPDATE supplier
       	SET supplierphone = newphone
       	WHERE supplierID = suppID
       END;
/*add new supplier*/
create procedure addNewSupplier(suppID char(10), suppname varchar(25)
                                scity varchar(50), sphone char(10))
       BEGIN
        INSERT
        INTO supplier(supplierID, sname, suppliercity, suplierphone)
        VALUES (suppID, suppname,  scity, sphone
       END;
/*delete supplier*/
create procedure deleteSupplier(suppID char(10))
       BEGIN
        DELETE
        FROM supplier
        WHERE supplierID = suppID
       END;
/*change product info*/
create procedure changeProductName(sku char(13), newname varchar(25))
       BEGIN
	UPDATE product
       	SET upc = sku
       	WHERE upc = sku
       END;
create procedure changeProductCategory(sku char(13), newcat varchar(25))
       BEGIN
	UPDATE product
	SET category = newcat
	WHERE upc = sku
       END;
create procedure changeProductType(sku char(13), newtype varchar(25))
       BEGIN
        UPDATE product
        SET ptype = newtype
        WHERE upc = sku
       END;

/*change product pricing*/
create procedure changeProductPrice(suppID char(10), sku char(13), newprice decimal(5,2))
       BEGIN
	UPDATE sells
	SET price = newprice
	WHERE sells.supplierID = suppID and sells.upc = sku
       END;
create procedure changeProductShippingCost(suppID char(10), sku char(13), newprice deicmal(5,2))
       BEGIN
	UPDATE sells
	SET shipcost = newprice
	WHERE sells.supplierID = suppID and sells.upc = sku
       END;
/*1.E Ablility to view Inventory*/
create procedure showInventory(suppID char(10))
       BEGIN
	SELECT supplierID, sname, pname, ptype, category, inventory, price 
	FROM (sells join product using(upc)) join supplier using (supplierID)
	WHERE supplierID = suppID
       END;

/*skipping 1.F*/
		 
