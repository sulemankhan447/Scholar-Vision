import sqlite3
from sqlite3 import Error
def create_connection(db_file):
	try:
		conn = sqlite3.connect(db_file)
		return conn
	
	except Error as e:
		print(e)
	
	return None
    
    
def select_all_tasks(conn):
    cur = conn.cursor()
    #cur.execute("SELECT * FROM moz_places")
    cur.execute("SELECT * FROM urls")
    rows = cur.fetchall()
    for row in rows:
        print("URL" + str(row[1]))


#def f():
#database = "/home/sobiya/.mozilla/firefox/kc6j7ter.default/places.sqlite"
database = "/home/sobiya/.config/google-chrome/Default/History"
# create a database connection
conn = create_connection(database)
if(conn):
	select_all_tasks(conn)
 
 
#if __name__ == '__main__':
	#f()
    
    
#f = open('/home/sobiya/.mozilla/firefox/kc6j7ter.default/places.sqlite/', 'rb')
#data = f.read()
#print(data)
#f.close()
#f = open('your_expected_file_path', 'w')
#f.write(repr(data))
#f.close()
