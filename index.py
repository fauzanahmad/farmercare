import mysql.connector
from mysql.connector import Error
from flask import Flask, redirect, url_for, request , render_template
app = Flask(__name__) 
  
@app.route('/')
def login():
	CreateTables()
	return render_template("index.html") 
	
@app.route('/select_customer')
def select_customer(): 
	return render_template("select-customer.html") 
  
@app.route('/select_product', methods=['GET', 'POST'])
def select_product():
	return render_template('select-product.html')


@app.route('/select_varient', methods=['GET', 'POST'])
def select_varient():
	return render_template('select-varient.html')
	

@app.route('/select_farmer_info', methods=['GET', 'POST'])
def select_farmer_info():
	return render_template('select-farmer-info.html')
	

@app.route('/select_price', methods=['GET', 'POST'])
def select_price():
	return render_template('select-price.html')
	

@app.route('/select_quote', methods=['GET', 'POST'])
def select_quote():
	return render_template('select-quote.html')
		
@app.route('/select_emergency', methods=['GET', 'POST'])
def select_emergency():
	return render_template('select-emergency.html')
	
@app.route('/select_farmer', methods=['GET', 'POST'])
def select_farmer():
	return render_template('select-customer.html')
	#return render_template('select-farmer.html')

#--------------------------------------------------------------------------------------------
#------------------------------------- back end coding start ---------------------------------
#--------------------------------------------------------------------------------------------

@app.route('/user_signup', methods=['GET', 'POST'])
def user_signup():
	email		= request.form.get('email')
	password	= request.form.get('password')
	
	ret_value = CheckUserIdPassword(email,password)
	

	if ret_value == 'farmer':
		return render_template('select-farmer.html')
	elif ret_value == 'customer':
		return render_template('select-product.html')
	else:
		return render_template("index.html")

@app.route('/user_registration', methods=['GET', 'POST'])
def user_registration():
	name		= request.form.get('Name')
	email		= request.form.get('Email')
	mobile		= request.form.get('Mobile')
	Address		= request.form.get('Address')
	usertype	= request.form.get('usertype')
	country		= request.form.get('Country')
	state		= request.form.get('State')
	city		= request.form.get('City')
	pincode		= request.form.get('PinCode')
	gender		= request.form.get('gender')
	
	password = 123
	
	ret = RegisterUsers(name,email,mobile,Address,usertype,country,state,city,pincode,gender,password)
	

	return render_template("index.html")

#--------------------------------------------------------------------------------------------
#------------------------------------- back end coding end ---------------------------------
#--------------------------------------------------------------------------------------------

#--------------------------------------------------------------------------------------------
#------------------------------------- database management start ----------------------------
#--------------------------------------------------------------------------------------------

#
#CreateTables start
#
def CreateTables():	
	mydb = mysql.connector.connect(
	host="localhost",
	user="root",
	passwd="root"
	)

	#will create databse if it is not exist
	mycursor = mydb.cursor()
	mycursor.execute("CREATE DATABASE IF NOT EXISTS db_farmercare")
	mycursor.close()

	mydb = mysql.connector.connect(
	host="localhost",
	user="root",
	passwd="root",
	database = "db_farmercare"
	)

	mycursor = mydb.cursor()

	sql = """CREATE TABLE IF NOT EXISTS RegisteredUsers(
		name char(25),
		email char(35),
		mobile varchar(10),
		Address varchar(150),
		usertype char(9),
		country char(15),
		state char(35),
		city char(35),
		pinecode int(10),
		gender char(6),
		password char(15)
		)"""
	mycursor.execute(sql)

	mycursor.close()
#
#CreateTables end
#

#-----------------------------------RegisterUsers start-----------------------------

def RegisterUsers(name,email,mobile,Address,usertype,country,state,city,pincode,gender,password):
	try:

		sql = "INSERT INTO RegisteredUsers (name,email,mobile,Address,usertype,country,state,city,pinecode,gender,password) VALUES ('{0}','{1}',{2},'{3}','{4}','{5}','{6}','{7}',{8},'{9}','{10}')".format(name,email,mobile,Address,usertype,country,state,city,pincode,gender,password)

		mydb = mysql.connector.connect(
			host="localhost",
			user="root",
			passwd="root",
			database = "db_farmercare"
			)
		
		mycursor = mydb.cursor()
		mycursor.execute(sql)
		mydb.commit()

	except mysql.connector.Error as error:
			return "record adding entry failed"
	finally:
		if (mydb.is_connected()):
			mycursor.close()
			mydb.close()
	return "record added successfully"

#-----------------------------------RegisterUsers end-------------------------------



#-----------------------------------CheckUserIdPassword start-----------------------------

def CheckUserIdPassword(email,password):
	try:

		sql = "SELECT * FROM RegisteredUsers WHERE email='{0}'".format(email)
		
		

		mydb = mysql.connector.connect(
			host="localhost",
			user="root",
			passwd="root",
			database = "db_farmercare"
			)
		
		mycursor = mydb.cursor()
		mycursor.execute(sql)
		record = mycursor.fetchall()
		
		ret_value = " "

		if(len(record) >= 1 ):
			sql = "SELECT password FROM RegisteredUsers WHERE email='{0}'".format(email)
			
			mycursor = mydb.cursor()
			mycursor.execute(sql)
			record = mycursor.fetchone()

			if(record[0] == password):
				sql = "SELECT usertype FROM RegisteredUsers WHERE email='{0}'".format(email)
				
				mycursor = mydb.cursor()
				mycursor.execute(sql)
				record = mycursor.fetchone()
				
				ret_value = record[0]

		

	except mysql.connector.Error as error:
			return -1
	finally:
		if (mydb.is_connected()):
			mycursor.close()
			mydb.close()
	return ret_value

#-----------------------------------CheckUserIdPassword end-------------------------------

#-----------------------------------CheckUserExistence start-----------------------------

def CheckUserExistence(email):
	try:

		sql = "SELECT * FROM RegisteredUsers WHERE email='{0}'".format(email)

		mydb = mysql.connector.connect(
			host="localhost",
			user="root",
			passwd="root",
			database = "db_farmercare"
			)
		
		mycursor = mydb.cursor()
		mycursor.execute(sql)
		record = mycursor.fetchall()

		ret_value = 0

		ret_value = len(record)

	except mysql.connector.Error as error:
			return -1
	finally:
		if (mydb.is_connected()):
			mycursor.close()
			mydb.close()
	return ret_value

#-----------------------------------CheckUserExistence end-------------------------------

#--------------------------------------------------------------------------------------------
#------------------------------------- database management end ------------------------------
#--------------------------------------------------------------------------------------------

if __name__ == '__main__': 
   app.run(debug = True)
