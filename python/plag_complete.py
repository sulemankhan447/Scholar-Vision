import sqlite3
from sqlite3 import Error
import bs4 as bs
import urllib.request
from difflib import SequenceMatcher

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
			#print(row[1])
			h_list.append(row[1])

	database = "/home/sobiya/.config/google-chrome/Default/History"

	conn = create_connection(database)
	if(conn):
		select_urls(conn)

	#print("h_list: \n\n"+str(h_list))
	return h_list


def plag():
	code = '''
	#include<stdio.h>
	 
	int main()
	{
	   int a, b, c;
	 
	   printf("Enter two numbers to add\n");
	   scanf("%d%d",&a,&b);
	 
	   c = a + b;
	 
	   printf("Sum of entered numbers = %d\n",c);
	 
	   return 0;
	}
	'''
	try:
		r=[]
		#urls=["http://www.programmingsimplified.com/c-program-add-two-numbers","http://scanftree.com/programs/c/to-find-factorial-of-a-number-using-c-program/","http://www.sanfoundry.com/c-program-armstrong-number/"]
		urls = history()
		print(urls)
		#print(urls[1])
		for url in urls:
			sauce = urllib.request.urlopen(url).read()
			soup = bs.BeautifulSoup(sauce,'lxml')
			#print(soup.text)
			for pre_tag in soup.find_all('pre'):
				#print(pre_tag.text)
				r.append(SequenceMatcher(None, pre_tag.text , code ).ratio())
				#print(r)
		
		copy = (int(max(r)*100))
		print(copy)
		print("try")
	
	except(ValueError) as e:
		copy = 0
		print(copy)
		
	except:
		copy = (int(max(r)*100))
		print(copy)
	return copy


copy = plag()
print(copy)
