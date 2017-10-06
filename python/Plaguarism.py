
# coding: utf-8

# In[9]:


import bs4 as bs


# In[3]:


import urllib.request


# In[6]:


sauce = urllib.request.urlopen("https://www.programiz.com/python-programming/examples/prime-number").read()

# print(sauce)


# In[86]:


soup = bs.BeautifulSoup(sauce,'lxml')
a = soup

print(a)


# In[24]:


print(soup.title)


# In[63]:


text = ''' jkbsbfkb
sfhshflkhfs
lkslkl'''
v = set(soup.findAll(text = 'print(num,"is not a prime number")') )

if len(v) == 0:
    print("No Plag")
    
else:
    print("plag")
    


# In[81]:


from difflib import SequenceMatcher


# In[90]:


r = SequenceMatcher(None, soup.pre.text , 'print(num,"is not a prime number")' ).ratio()

print(r*100)


# In[88]:




