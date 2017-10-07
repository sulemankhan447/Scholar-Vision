from testcase import foo;
import pymysql  as dbt
import datetime

# ================ CONFIG ================

host = "localhost"
user = "root"
passwd = "root"
db = "test"

# ========================================



sc = dbt.connect(host=host, user=user, passwd=passwd, db=db)
cur = sc.cursor()

# -----------------------Get data from Database---------------------------

cur.execute("select input,output from test ")
data = cur.fetchall()
for row in data:
    print(row)
    l=row[0].split(',')
    print(l)
    res=foo(int(l[0]),int(l[1]))
    print(res)
    if res==int(row[1]):
      print("true")
    else:
      print("false")


