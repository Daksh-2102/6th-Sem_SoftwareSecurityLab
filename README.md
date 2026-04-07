🔐 Software Security Experiments

This repository contains a collection of practical experiments focused on identifying, exploiting, and mitigating common software security vulnerabilities. The goal is to understand real-world security flaws and implement secure coding practices.

📌 Objectives
Understand common web application vulnerabilities
Perform hands-on exploitation in a controlled environment
Learn secure coding techniques to prevent attacks
Analyze insecure vs secure implementations
🧪 Experiments Included
1. SQL Injection
Demonstrates authentication bypass using SQL injection
Vulnerable login system using raw queries
Secure version using prepared statements
2. Cross-Site Scripting (XSS)
Stored XSS using input fields (e.g., shoutbox/comments)
Execution of malicious scripts in browser
Secure version with input sanitization and output encoding
3. Password Hashing
Weak hashing using MD5 / plain text storage
Secure hashing using SHA-256 with salt
Demonstrates importance of password protection
4. Network Traffic Analysis (Wireshark)
Capturing HTTP login requests
Observing plaintext credentials
Analyzing headers and packet data
Understanding risks of unencrypted communication
5. Secure Authentication System
Comparison of insecure vs secure login logic
Implementation using parameterized queries
Basic input validation and error handling
🛠️ Technologies Used
PHP
MySQL
HTML/CSS
Python (for hashing demos)
XAMPP Server
Wireshark
