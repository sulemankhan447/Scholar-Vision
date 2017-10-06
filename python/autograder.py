import MySQLdb
import datetime

# ================ CONFIG ================

host = "localhost"
user = "root"
passwd = "root"
db = "EADB"

# ========================================

m = 0

db = MySQLdb.connect(host=host, user=user, passwd=passwd, db=db)
cur = db.cursor()

# -----------------------Get data from Database---------------------------

cur.execute("select rollno, name from student where rollno = '1' ")
#cur.execute("select tos, code, output from code where rollno = ? ")
rollno, name = cur.fetchone()

cur.execute("select tos, code, output from code where rollno = '1' ")
#cur.execute("select tos, code, output from code where rollno = ? ")
tos, code, output = cur.fetchone()


cur.execute("select dos, writeup from exp_detail where s_name = 'OS' and e_id = 1")
#cur.execute("select dos, writeup from exp_detail where s_name = ? and e_id = ?")
dos, writeup = cur.fetchone()


# -----------------------Grading----------------------------------------

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

cur.execute("update code set marks=%s where rollno='1' " % (m))
#cur.execute("update code set marks=%s where rollno=? " % (m))

db.commit()
db.close()


