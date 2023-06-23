# following the tutorial at https://www.youtube.com/playlist?list=PL-osiE80TeTs4UjLw5MM6OjgkjFeUxCYH
import os
from datetime import datetime
from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask_bcrypt import Bcrypt
from flask_login import LoginManager
from sqlalchemy import create_engine, inspect

# print(f"sqlite:///{os.getcwd()}/flaskTry/site.db")
#
# engine = create_engine(f"sqlite:///{os.getcwd()}/flaskTry/site.db")
# connection = engine.connect()


app = Flask(__name__)

# in the python console, import the secrets package and just call secrets.token_hex(16) to generate a random secret number
app.config['SECRET_KEY'] = '436ab96a7efdc88c90f2c81e5a5bba9e'
app.config['SQLALCHEMY_DATABASE_URI'] = f"sqlite:///{os.getcwd()}/flaskTry/site.db"

db = SQLAlchemy(app)
bcrypt = Bcrypt(app)
login_manager = LoginManager(app)
login_manager.login_view = 'login'
login_manager.login_message_category = 'info'


#This import is after the db creation to avoid circular import
#if it was before, because the routes start by importing the app, it would create a circular import issue
from flaskTry import routes