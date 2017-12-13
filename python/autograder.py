import MySQLdb
import datetime
import sqlite3
from sqlite3 import Error
import bs4 as bs
import urllib.request
from difflib import SequenceMatcher
import sys

# ================ CONFIG ================

host = "localhost"
user = "root"
passwd = "root"
db = "EADB"

# ======================================================================

m = 0

rno = sys.argv[1]
sn = sys.argv[2]
eid = sys.argv[3]
eid = int(eid)

db = MySQLdb.connect(host=host, user=user, passwd=passwd, db=db)
cur = db.cursor()

# =====================Get data from Database===========================

#cur.execute("select rollno, name from student where rollno = '1' ")
#cur.execute("select rollno, name from student where rollno = rno ")
#cur.execute("select tos, code, output from code where rollno = ? ")
#rollno, name = cur.fetchone()

#cur.execute("select tos, code, output from code where rollno = '1' ")
cur.execute("select tos, code, output from code where rollno = %s " %(rno))
#cur.execute("select tos, code, output from code where rollno = ? ")
tos, c, output = cur.fetchone()

#cur.execute("select dos, writeup from exp_detail where s_name = 'OS' and e_id = 1 ")
cur.execute("select dos, writeup from exp_detail where s_name = 'OS' and e_id = %s " %(eid))
#cur.execute("select dos, writeup from exp_detail where s_name = ? and e_id = ?")
dos, writeup = cur.fetchone()


#=====================Required Functions For Grading=====================

def history():
	h_list=[]
	def create_connection(db_file):
		try:
			conn = sqlite3.connect(db_file)
			return conn
		
		except Error as e:
			print(e)
		return None
		
	def select_urls(conn):
		cur = conn.cursor()
		cur.execute("SELECT * FROM urls order by last_visit_time desc limit 2")
		rows = cur.fetchall()
		for row in rows:
			h_list.append(row[1])

	database = "/home/sobiya/.config/google-chrome/Default/History"

	conn = create_connection(database)
	if(conn):
		select_urls(conn)

	return h_list


def plag():
	code = c
	try:
		r=[]
		urls=["http://www.programmingsimplified.com/c-program-add-two-numbers","http://scanftree.com/programs/c/to-find-factorial-of-a-number-using-c-program/","http://www.sanfoundry.com/c-program-armstrong-number/"]
		#urls = history()
		for url in urls:
			sauce = urllib.request.urlopen(url).read()
			soup = bs.BeautifulSoup(sauce,'lxml')
			for pre_tag in soup.find_all('pre'):
				r.append(SequenceMatcher(None, pre_tag.text , code ).ratio())
		
		copy = (int(max(r)*100))
	
	except(ValueError, urllib.error.HTTPError) as e:
		copy = 0
		
	except:
		copy = (int(max(r)*100))

	return copy


# =============================Grading==================================

#para1- Ontime Submission
if(tos <= dos):
	m +=2
else:
	m +=1


#para2- Output
#if(os.stat("output").st_size == 0):
if(output == None):
	m += 1
else:
	m +=2


#para3- Plaguarism
copy = plag()

if(copy > 70):
	m += 3
elif(copy > 60):
	m += 4
else:
	m += 6


#cur.execute("update code set marks=%s where rollno='1' " % (m))
cur.execute("update code set marks=%s where rollno=%s " % (m,rno))
#cur.execute("update code set marks=%s where rollno=? " % (m))
print(m)

db.commit()
db.close()


