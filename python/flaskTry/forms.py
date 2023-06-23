from flask_wtf import FlaskForm
from flask_wtf.file import FileField, FileAllowed

from flask_login import current_user
from wtforms import StringField,\
    PasswordField, SubmitField, BooleanField, TextAreaField
from wtforms.validators import DataRequired, Length, EqualTo, ValidationError, \
    Email  # need to call pip install email_validator from terminal
from flaskTry.models import User


class RegistrationForm(FlaskForm):
    username = StringField("UserName", validators=[DataRequired(), Length(min=2, max=30)])
    email = StringField("Email", validators=[DataRequired(), Email()])
    password = PasswordField("Password", validators=[DataRequired(), Length(min=2, max=15)])
    confirm_password = PasswordField("Confirm Password",
                                     validators=[DataRequired(), Length(min=2, max=15), EqualTo('password')])
    submit = SubmitField('Sign up')

    def validate_username(self, username):
        user = User.query.filter_by(username=username.data).first()
        user = None
        if user:
            raise ValidationError('User name taken')

    def validate_email(self, email):
        user = User.query.filter_by(email=email.data).first()
        user = None
        if user:
            raise ValidationError('Email already exists')


class LoginForm(FlaskForm):
    email = StringField("Email", validators=[DataRequired(), Email()])
    password = PasswordField("Password", validators=[DataRequired(), Length(min=2, max=15)])
    remember = BooleanField('Remember me')
    submit = SubmitField('Login')




class UpdateForm(FlaskForm):
    username = StringField("UserName", validators=[DataRequired(), Length(min=2, max=30)])
    email = StringField("Email", validators=[DataRequired(), Email()])
    pic = FileField("Update Profile Picture", validators=[FileAllowed(["jpg","png"])])

    submit = SubmitField('Update')

    def validate_username(self, username):
        if username.data != current_user.username:
            user = User.query.filter_by(username=username.data).first()
            if user:
                raise ValidationError('User name taken')

    def validate_email(self, email):
        if email.data != current_user.email:
            user = User.query.filter_by(email=email.data).first()
            if user:
                raise ValidationError('Email already exists')


class PostForm(FlaskForm):
    title = StringField("Title", validators=[DataRequired()])
    content  = TextAreaField("Content", validators=[DataRequired()])
    submit = SubmitField('Post')
