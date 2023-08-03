import email
from unittest import result
from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def home(request):
    return render(request, "authentication/loginpage.php")

def signup(request):
    return render(request, "authentication/signup.php")

def homepage(request):
    import re
    paths_url = request.get_full_path()
    temp = re.findall(r'\d+', paths_url)
    id = temp[0]
    print(id)
    import mysql.connector

    mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="food"
    )
    
    mycursor = mydb.cursor()

    mycursor.execute("SELECT name,comment FROM comment")
    
    myresult = mycursor.fetchall()

    print(myresult)

    for x in myresult:
       print(x[0])
       print(x[1])
       print("\n")
      
    return render(request, "authentication/homepage.html",{'id':id,'myresult':myresult})

def welcome(request):
    import re
    paths_url = request.get_full_path()
    temp = re.findall(r'\d+', paths_url)
    id = temp[0]
    print(id)
    return render(request, "authentication/welcome.php",{'id':id})

def recipefinder(request):
    import re
    paths_url = request.get_full_path()
    temp = re.findall(r'\d+', paths_url)
    id = temp[0]
    print(id)
    return render(request, "authentication/recipefinder.html",{'id':id})

def forgot(request):
     return render(request, "authentication/forgot.php")

def check(request):
    import re
    paths_url = request.get_full_path()
    temp = re.findall(r'\d+', paths_url)
    id = temp[0]
    print(id)

    import mysql.connector

    mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="food"
    )

    mycursor = mydb.cursor()

    mycursor.execute("SELECT name,password,email FROM users WHERE id='%s'" % id)

    myresult = mycursor.fetchall()

    for x in myresult:
        name = x[0]
        password = x[1]
        email = x[2]

    print(name)
    print(password)
    print(email)
    
    import smtplib

    server = smtplib.SMTP("smtp.gmail.com", 587)

    server.starttls()

    server.login("foodrecipegroup9@gmail.com","bvm@group9")

    server.sendmail("foodrecipegroup9@gmail.com",email,"Hello How are you \nYour username is "+name+" \nYour password is "+password+"")
    print("mail send")

    return render(request, 'authentication/loginpage.php',{'data1':id})

def external(request):
    import re
    paths_url = request.get_full_path()
    temp = re.findall(r'\d+', paths_url)
    id = temp[0]
    print(id)

    inp = request.POST.get('myfile')

    import numpy as np
    from tensorflow.keras.applications.mobilenet_v2 import preprocess_input
    from tensorflow.keras.preprocessing.image import img_to_array
    import cv2
    import tensorflow as tf

    model_1 = tf.keras.models.load_model("C:/Users/Satyarth/PycharmProjects/pythonProject/food_detector.model")

    image = cv2.imread("C:/wampIT/www/food/"+inp)

    file1 = open("E:/G9_food_dataset/list_of_foods.txt","r")
    content = file1.readlines()

    img = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
    img = cv2.resize(img, (224, 224))
    img = img_to_array(img)
    img = preprocess_input(img)
    img = np.expand_dims(img, axis=0)

    pred = model_1.predict(img)[0]
    index = np.argmax(pred)
    print(index)

    ans = content[index]
    print(ans)
    ans2 = "Food is "+ans+" ?"
    print(inp)
    data1 = ans2
    data2 = inp    
    data3 = ans
    print(data3)
    return render(request,'authentication/index.html',{'data1':data1,"data2":data2,"id":id,"data3":data3})
    