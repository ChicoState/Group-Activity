import time
from selenium import webdriver
from seleniumbase import BaseCase
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager


class LoginTest(BaseCase):

    def test_smoke_test(self):
        self.open("http://www.accountplusfinance.com/chico/cins370/project.html")

        self.assert_title("Group Activity")

    def test_login_is_user(self):
        options = Options()
        options.add_experimental_option("detach", True)

        driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),options=options)
        driver.get("http://www.accountplusfinance.com/chico/cins370/project.html")
        driver.maximize_window()
        username = driver.find_element(By.NAME, "uName")
        password = driver.find_element(By.NAME, "pWord")
        submit = driver.find_element(By.CLASS_NAME, "btn")

        username.send_keys("anorquist")
        password.send_keys("password123")
        submit.click()
        time.sleep(3)
        pageTitle = driver.title
        self.assertEqual("Group Activity", pageTitle, "matching")
        driver.close()

    def test_login_not_user(self):
        options = Options()
        options.add_experimental_option("detach", True)

        driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),options=options)
        driver.get("http://www.accountplusfinance.com/chico/cins370/project.html")
        driver.maximize_window()
        username = driver.find_element(By.NAME, "uName")
        password = driver.find_element(By.NAME, "pWord")
        submit = driver.find_element(By.CLASS_NAME, "btn")

        username.send_keys("anor")
        password.send_keys("password123")
        submit.click()
        time.sleep(3)
        pageTitle = driver.title
        self.assertEqual("Bootstrap Example", pageTitle, "matching")
        driver.close()

    def test_nav_bar(self):
        options = Options()
        options.add_experimental_option("detach", True)

        driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),options=options)
        driver.get("http://www.accountplusfinance.com/chico/cins370/project.html")
        driver.maximize_window()
        username = driver.find_element(By.NAME, "uName")
        password = driver.find_element(By.NAME, "pWord")
        submit = driver.find_element(By.CLASS_NAME, "btn")

        username.send_keys("anorquist")
        password.send_keys("password123")
        submit.click()
        time.sleep(3)

        #grab and click the friends button in the nav bar
        friends_button = driver.find_element(By.XPATH, '//a[contains(@href,"http://www.accountplusfinance.com/chico/cins370/friends.php")]')
        friends_button.click()
        time.sleep(3)

        #check if the url the friends button sent you to is correct
        cur_url = driver.current_url
        self.assert_equal("http://www.accountplusfinance.com/chico/cins370/friends.php", cur_url, "is equal")
        driver.close()

    def test_logout(self):
        options = Options()
        options.add_experimental_option("detach", True)

        driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()),options=options)
        driver.get("http://www.accountplusfinance.com/chico/cins370/project.html")
        driver.maximize_window()
        username = driver.find_element(By.NAME, "uName")
        password = driver.find_element(By.NAME, "pWord")
        submit = driver.find_element(By.CLASS_NAME, "btn")

        username.send_keys("anorquist")
        password.send_keys("password123")
        submit.click()
        time.sleep(3)

        logout_button = driver.find_element(By.XPATH, '//a[contains(@href,"exit.php")]')
        logout_button.click()

        cur_url = driver.current_url
        self.assert_equal("http://www.accountplusfinance.com/chico/cins370/exit.php", cur_url, "is equal")
        driver.close()




