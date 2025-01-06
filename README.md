# WordPress Admin Panel Phishing Simulation
Just for educational purpose!
This project is a WordPress Admin Panel Phishing Simulation designed to educate users about the dangers of phishing attacks and raise awareness of the importance of website security. The simulation mimics the WordPress login page (wp-login.php / wp-admin.php) and is intended for use in controlled environments to help individuals recognize and avoid phishing attempts.

![image](https://github.com/user-attachments/assets/b855af21-f592-4cb0-aed0-fe28725491ec)

# Wordpress Common Admin Panel
  - It will Credentials for 2 times (No matter victim gives the correct credentials in first attempt).
  - Both user entered credentials will be stored in .cj log file.
  - Additionally grab the victim's IP,UserAgent and other details.
  - Victim will be redirected to wordpress updating documentation page.
  - .htaccess support is also available


# Key Features
  - Realistic WordPress Login Page: The phishing page is designed to look identical to the authentic WordPress admin login page, featuring the standard layout and login fields.
  
  - Credential Capture: When a user enters their credentials, the details are securely captured and stored for educational purposes, allowing administrators to assess the effectiveness of security       awareness programs.  (check `34-susukrnch.cj`)
  
  - Redirect and Warning: After submitting the credentials, users are redirected to the actual WordPress login page or their dashboard, along with a warning explaining the phishing attempt and           highlighting key security lessons.

  - Educational Focus: This tool is built to teach users the risks of phishing and emphasize the importance of verifying website authenticity, practicing caution when entering login details, and        using two-factor authentication (2FA) for enhanced security.

# TIPS
You can use serverless method like:
  - AWS Lambda
  - Cloudflare Workers
  - Google Cloud Functions


                          When victim just click on your link

![image](https://github.com/user-attachments/assets/7d31a57c-214b-4183-8c41-c7fb34a66c49)


                          After Successful Phishing Attack

![image](https://github.com/user-attachments/assets/ca500814-2fc4-43f7-91c9-464865e001b6)

