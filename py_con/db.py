import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="system"
)

mycursor = mydb.cursor()
id = 5
mycursor.execute(f"SELECT username FROM users Where id={id}")

myresult = mycursor.fetchall()

print(list(myresult))