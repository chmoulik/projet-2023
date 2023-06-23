@app.route('/')
def home():
    return "<p>Hello</p>"

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
