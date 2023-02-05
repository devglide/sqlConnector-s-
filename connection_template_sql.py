import mysql.connector
from mysql.connector import Error
import pandas as pd

host_name='103.231.30.155',
user_name='devongl_tester',
user_password='(yc{z[~Ps~]Y',
database='devongl_testers'


def create_server_connection(host_name, user_name, user_password):
    connection = None
    try:
        connection = mysql.connector.connect(
            host= host_name,
            user= user_name,
            passwd= user_password
        )
        print("MySQL Database connection successful")
    except Error as err:
        print(f"Error: '{err}'")

    return connection
