
from flask import Flask, jsonify, render_template
from flask.ext.mysql import MySQL
app = Flask(__name__)


mysql = MySQL()
 
# MySQL configurations
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = 'zzz!'
app.config['MYSQL_DATABASE_DB'] = 'project3_Data'
app.config['MYSQL_DATABASE_HOST'] = 'localhost:3306'
mysql.init_app(app)

	
conn = mysql.connect()




if __name__ == "__main__":
    app.run(debug=True)
