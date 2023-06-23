import secrets
import os
import smtplib, ssl
from PIL import Image
from flask import render_template, url_for, flash, redirect, request
from flaskTry import app, db, bcrypt
from flaskTry.forms import LoginForm, RegistrationForm, UpdateForm, PostForm
from flaskTry.models import *
from flask_login import login_user, current_user, logout_user, login_required

posts = [
    {
        'author': 'me',
        'title': 'blog',
        'date_posted': '1 january',
        'content': 'blah blah'
    },

    {
        'author': 'you',
        'title': 'smthing',
        'date_posted': '1 january',
        'content': 'blah blah'
    }

]


@app.route('/')
@app.route('/home')
def home():
    return render_template('home.html', posts=posts, title="My Title")


@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/mail')
def send_mail():
    list_mails = ["chmoulik770770@hotmail.com", "dominique@arcreane.com"]
    message = "salut chef"
    port = 465  # For SSL
    password = "qhgxkkfvrjfmlwqa"
    # Create a secure SSL context
    context = ssl.create_default_context()

    with smtplib.SMTP_SSL("smtp.gmail.com", port, context=context) as server:
        server.login("simonwebstart@gmail.com", password)
        message = f"""\
        Subject: Hi there
{message}
        This message is sent from Python."""
        # print (dict_mails, message)
        try:
            success = server.sendmail("simonwebstart@gmail.com", list_mails, message)
        except Exception as e:
            print(e)  

    return home()

@app.route('/register', methods=['POST', 'GET'])
def register():
    if current_user.is_authenticated:
        return redirect(url_for('home'))
    form = RegistrationForm()
    if form.validate_on_submit():
        hashed_pwd = bcrypt.generate_password_hash(form.password.data).decode('utf-8')
        user = User(username=form.username.data, email=form.email.data, password=hashed_pwd)
        db.session.add(user)
        db.session.commit()
        flash(f'Account created fo {form.username.data}! You can now log in',
              'success')  # 'success' comes from Bootstrap
        return redirect(url_for('login'))
    return render_template('register.html', title='Register', form=form)


@app.route('/login', methods=['POST', 'GET'])
def login():
    if current_user.is_authenticated:
        return redirect(url_for('home'))
    form = LoginForm()
    if form.validate_on_submit():
        user = User.query.filter_by(email=form.email.data).first()
        if user and bcrypt.check_password_hash(user.password, form.password.data):
            login_user(user, remember=form.remember.data)
            next_page = request.args.get('next')

            return redirect(next_page) if next_page else redirect(url_for('home'))
        else:
            flash('Login Unsuccessful. Please try again', 'danger')  # 'danger' comes from Bootstrap

    return render_template('login.html', title='Login', form=form)


@app.route('/logout')
def logout():
    logout_user()
    return redirect(url_for('home'))


def save_pic(form_pic):
    random_hex = secrets.token_hex(8)
    f_name, f_ext = os.path.splitext(form_pic.filename)
    picture_fn = random_hex + f_ext
    picture_path = os.path.join(app.root_path, 'static/pics', picture_fn)

    output_siize = (125, 125)
    i = Image.open(form_pic)
    i.thumbnail(output_siize)
    i.save(picture_path)

    return picture_fn


@app.route('/account', methods=['POST', 'GET'])
@login_required
def account():
    form = UpdateForm()
    if form.validate_on_submit():
        if form.pic.data:
            pic_file = save_pic(form.pic.data)
            current_user.image_file = pic_file

        current_user.username = form.username.data
        current_user.email = form.email.data
        db.session.commit()
        flash('Account successfully updated', 'success')  # 'danger' comes from Bootstrap
        return redirect(url_for('account'))
    elif request.method == 'GET':
        form.username.data = current_user.username
        form.email.data = current_user.email

    image_file = url_for('static', filename='pics/' + current_user.image_file)
    return render_template('account.html', title='Account', image_file=image_file, form=form)


@app.route('/post/new', methods=['POST', 'GET'])
@login_required
def new_post():
    form = PostForm()
    if form.validate_on_submit():
        flash("Your post has bee createed !", 'sucees')
        return redirect(url_for('home'))

    return render_template('create_post.html', title='New Post', form=form)
