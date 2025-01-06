# WordPress Admin Panel Phishing Simulation
Just for educational purpose!
This project is a WordPress Admin Panel Phishing Simulation designed to educate users about the dangers of phishing attacks and raise awareness of the importance of website security. The simulation mimics the WordPress login page (wp-login.php / wp-admin.php) and is intended for use in controlled environments to help individuals recognize and avoid phishing attempts.

![image](https://github.com/user-attachments/assets/b855af21-f592-4cb0-aed0-fe28725491ec)

# Wordpress Common Admin Panel
  - Credential Capture: The script will prompt the user for login credentials twice, regardless of whether they provide the correct credentials on the first attempt.
  - Data Logging: Both sets of user-entered credentials will be securely logged in a .cj file for analysis.
  - Additional Information Gathering: Alongside the credentials, the script will capture valuable details such as the victim's IP address, User-Agent, and other system information for a comprehensive data set.
  - Redirection: After the second login attempt, the victim will be seamlessly redirected to the official WordPress update documentation page, maintaining the appearance of a legitimate interaction.
  - .htaccess Support: Full support for .htaccess is provided, ensuring compatibility and enhanced control over URL redirection and access settings.


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






When victim just visit the page
  ![temp1](https://github.com/user-attachments/assets/5197553e-cc96-4575-8cb8-604ba3e74617)



After successful phishing attempt
  ![temp2](https://github.com/user-attachments/assets/637e29b3-838f-43ea-8e30-b66ffa8c1d97)


# Legal and Ethical Considerations
This simulation is intended strictly for educational purposes and should be used in controlled environments with explicit consent from users. It is essential to ensure that all phishing simulations are performed ethically and responsibly, focusing on user education and awareness.


