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

# -----------------------Get data from tables---------------------------

cur.execute("select rollno, name from student where rollno = '1' ")
#cur.execute("select tos, code, output from code where rollno = ? ")
rollno, name = cur.fetchone()

cur.execute("select tos, code, output from code where rollno = '1' ")
#cur.execute("select tos, code, output from code where rollno = ? ")
tos, code, output = cur.fetchone()


#print(output)
#print(type(output))
#print(type(tos))
#print(code)
cur.execute("select dos, writeup from exp_detail where s_name = 'OS' and e_id = 1")
#cur.execute("select dos, writeup from exp_detail where s_name = ? and e_id = ?")

dos, writeup = cur.fetchone()
#print(dos)


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
#db.close()

# --------------Create Final printable File and insert into DB-------------------------

# str(code) and str(output) is used here because it may psble code or output is empty
rollno = "Roll No: " + rollno
name = "Name: " + name
code = "Code:\n" + str(code)
output = "Output:\n" + str(output)
marks = "Marks: " + str(m)

final = rollno + "\n" + name + "\n\n\n" +code + "\n\n\n" + output + "\n\n\n" + marks
print(final)


#f = open("/var/www/html/final.txt","w")
#f.write(final)
#f.close()
cur.execute("LOAD DATA LOCAL INFILE '/var/www/html/final.txt' INTO TABLE final")
#cur.execute("insert into final (rollno, file)  values('1', 'final.txt');")
cur.execute("select file from final where rollno = '1'")
f1 = cur.fetchone()

#open(f1,'r')           
#f3 = f1.read()
#print(f3)
#f2.close()


db.commit()
db.close()

