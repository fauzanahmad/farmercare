from flask import Flask, redirect, url_for, request , render_template
app = Flask(__name__) 
  
@app.route('/')
def login(): 
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
	return render_template('select-farmer.html')


  
if __name__ == '__main__': 
   app.run(debug = True)
