import base64
import json
import serial
import time
import sys
import glob
import threading
from flask import Flask, redirect, url_for, request
import smtplib, ssl
#smtp setup
smtp_server = "mail.marcu.ru"
port = 587  # For starttls
sender_email = "grademaster@marcu.ru"
password = "r2&t7qdLAz"

sending=0

def send(numar,mesaj):
        try:
                ser = serial.Serial()
                ser.port = "COM18"
                ser.baudrate = 115200
                ser.bytesize = serial.EIGHTBITS  # number of bits per bytes
                ser.parity = serial.PARITY_NONE  # set parity check: no parity
                ser.stopbits = serial.STOPBITS_ONE  # number of stop bits
                # ser.timeout = 0             #non-block read
                ser.timeout = 2  # timeout block read
                ser.xonxoff = False  # disable software flow control
                ser.rtscts = False  # disable hardware (RTS/CTS) flow control
                ser.dsrdtr = False  # disable hardware (DSR/DTR) flow control
                ser.writeTimeout = 2  # timeout for write
                ser.open()
                time.sleep(0.8)
                data = "AT+CMGS=\""+numar+"\"\n"
                ser.write(data.encode())
                time.sleep(1.5)
                mesaj=mesaj+"\nGradeMaster --- grademaster.ru \n\x1A"
                ser.write(mesaj.encode())
                time.sleep(1)
                ser.close()
                return  1
        except:
            return 0





def sendmail(receiver_email,msg):
   context = ssl.create_default_context()
   with smtplib.SMTP(smtp_server, port) as server:
       server.ehlo()  # Can be omitted
       server.starttls(context=context)
       server.ehlo()  # Can be omitted
       server.login(sender_email, password)
       message = """\
Subject: O nota a fost adaugata

"""+msg+"\n\nGradeMaster --- grademaster.ru"
       server.sendmail(sender_email, receiver_email, message)
def thsend(nr,msg):
    global sending
    if(sending==0):
        sending=1
        send(nr,msg)
        time.sleep(0.5)
        sending=0
    else:
        time.sleep(1)
        while(1):
            if(sending==0):
                time.sleep(5)
                sending=1
                send(nr,msg)
                sending=0
                break
            

app = Flask(__name__)

@app.route('/success/<data>')
def success(data):
    obs = json.loads(base64.b64decode(data).decode('utf-8'))
    print(obs)
    threading.Thread(target=thsend, args=(obs["nr"],obs["cont"],)).start()
    return "OK"

@app.route('/email/<data>')
def mail(data):
    obs = json.loads(base64.b64decode(data).decode('utf-8'))
    print(obs)
    threading.Thread(target=sendmail, args=(obs["email"],obs["cont"],)).start()
    return "OK"


if __name__ == '__main__':
   app.run(host='0.0.0.0',debug = False)


