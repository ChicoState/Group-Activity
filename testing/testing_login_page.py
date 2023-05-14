import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
driver = webdriver.Chrome('./chromedriver')


##################################################
print("1: Testing unsuccessful login:")

driver.get('http://www.accountplusfinance.com/chico/cins370/project.html')

login_bar = driver.find_element("name","uName")

login_bar.clear()
login_bar.send_keys("fake_account")
#login_bar.send_keys(Keys.RETURN)

login_bar = driver.find_element("name","pWord")

login_bar.clear()
login_bar.send_keys("wrong@password")
login_bar.send_keys(Keys.RETURN)

#driver.find_element("css selector","button").click()
print(driver.current_url)

time.sleep(1)
if (driver.current_url == 'http://www.accountplusfinance.com/chico/cins370/failed-login.php?msg=failed'):
    print("     Test 1: Success")
else:
    print("     Test 1: Failure")
    exit()

time.sleep(1)
#########################################################

print("2: Testing login success in error page")

#driver.find_element("xpath", "//a[@href='project.html']").click();


login_bar = driver.find_element("name","userN")

login_bar.clear()
login_bar.send_keys("jj")
#login_bar.send_keys(Keys.RETURN)

login_bar = driver.find_element("name","pWrd")

login_bar.clear()
login_bar.send_keys("1234")
login_bar.send_keys(Keys.RETURN)

#driver.find_element("css selector","button").click()
time.sleep(1)

if (driver.current_url == 'http://www.accountplusfinance.com/chico/cins370/home.php'):
    print("     Test 2: Success")
else:
    print("     Test 2: Failure")
    exit()
time.sleep(1)

#####################################################

print("3: Testing successful login:")
driver.get('http://www.accountplusfinance.com/chico/cins370/project.html')


login_bar = driver.find_element("name","uName")

login_bar.clear()
login_bar.send_keys("jj")
login_bar.send_keys(Keys.RETURN)

login_bar = driver.find_element("name","pWord")

login_bar.clear()
login_bar.send_keys("1234")
login_bar.send_keys(Keys.RETURN)

time.sleep(1)

if (driver.current_url == 'http://www.accountplusfinance.com/chico/cins370/home.php'):
    print("     Test 3: Success")
else:
    print("     Test 3: Failure")
    exit()
time.sleep(1)


####################################################

print("X: Testing doing something cool")


#####################################################


time.sleep(5)
driver.close()




################
##############
###############
###############
################






print("4: Test making an exsisintg account:")
driver.get('http://www.accountplusfinance.com/chico/cins370/project.html')

driver.find_element("xpath", "//a[@href='register.php']").click();
#print(driver.current_url)


login_bar = driver.find_element("name","fName")
login_bar.clear()
login_bar.send_keys("Testing")

login_bar = driver.find_element("name","lName")
login_bar.clear()
login_bar.send_keys("jj")

login_bar = driver.find_element("name","uName")
login_bar.clear()
login_bar.send_keys("Account")

login_bar = driver.find_element("name","pWord")
login_bar.clear()
login_bar.send_keys("12345")

login_bar = driver.find_element("name","eMail")
login_bar.clear()
login_bar.send_keys("auto@test.com")

login_bar.send_keys(Keys.RETURN)

time.sleep(10)


if (driver.current_url == 'http://www.accountplusfinance.com/chico/cins370/register.php?msg=failed'):
    print("     Test 4: Success")
else:
    print("     Test 4: Failure")
    exit()
time.sleep(1)
##################################
print("5: Test making a new account:")
driver.get('http://www.accountplusfinance.com/chico/cins370/project.html')

driver.find_element("xpath", "//a[@href='register.php']").click();
#print(driver.current_url)


login_bar = driver.find_element("name","fName")
login_bar.clear()
login_bar.send_keys("Testing")

login_bar = driver.find_element("name","lName")
login_bar.clear()
login_bar.send_keys("jj")

login_bar = driver.find_element("name","uName")
login_bar.clear()
login_bar.send_keys("Account")

login_bar = driver.find_element("name","pWord")
login_bar.clear()
login_bar.send_keys("12345")

login_bar = driver.find_element("name","eMail")
login_bar.clear()
login_bar.send_keys("auto@test.com")


driver.find_element("xpath", "//a[@href='project.html']").click();

login_bar = driver.find_element("name","uName")
login_bar.clear()
login_bar.send_keys("Account")

login_bar = driver.find_element("name","pWord")
login_bar.clear()
login_bar.send_keys("12345")

login_bar.send_keys(Keys.RETURN)

time.sleep(1)

if (driver.current_url == 'http://www.accountplusfinance.com/chico/cins370/home.php)'):
    print("     Test 5: Success")
else:
    print("     Test 5: Failure")
    exit()
time.sleep(1)
