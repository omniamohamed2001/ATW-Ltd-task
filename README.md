# Sub-task #1: Linux Server Simulation (LAMP Setup) 
## 1. Install Required Packages: 
updates the local package index
<img src="https://github.com/user-attachments/assets/ab400300-02bf-4192-8ed2-ac7c54c4fd3e.png">

![image](https://github.com/user-attachments/assets/ab400300-02bf-4192-8ed2-ac7c54c4fd3e)
Install Apache, MySQL, and PHP on the Linux machine.
![image](https://github.com/user-attachments/assets/272db837-8f78-437e-8556-c07b906e53d4)
## 2. Configure Apache: 
enabling Apache to start with the OS, starting it, and ensuring it's running.
![image](https://github.com/user-attachments/assets/7b49596c-55ed-4970-9772-c328ade1b868)
Test that Apache working.
![image](https://github.com/user-attachments/assets/01eaf2d5-e40a-4e5a-a5e9-62b12f102205)
enabling MySQL to start with the OS, starting it, and ensuring it's running.
![image](https://github.com/user-attachments/assets/d9b85258-4eef-4939-ab7e-3b2cd86a5fcb)


git my machine's ip to test from host's browser
![image](https://github.com/user-attachments/assets/1ebd5f5a-165a-40ea-9b5a-707bf204b827)


## 3. Create a Simple Website: 
Replace index.html with a PHP file (e.g. index.php) that displays "Hello World!". 
![image](https://github.com/user-attachments/assets/3a369e55-e29c-4124-a1b9-a49b186c9a87)

edit configration file to set priorety to open index.php first
![image](https://github.com/user-attachments/assets/6bcc58cc-b4df-4f1a-ab7b-517bf75ef47b)
![image](https://github.com/user-attachments/assets/8390d441-ad41-422b-a5e3-9a04728d6609)

reload Apachce configuration file and Verify
![image](https://github.com/user-attachments/assets/11c0ad40-df9a-4dae-83f5-942b61365e72)

## 4. Configure MySQL:
Secure the MySQL installation (mysql_secure_installation or similar).
![image](https://github.com/user-attachments/assets/4b726780-b889-4d2a-b230-c8f257fa8f3f)
Create a new database (e.g. web_db) and a new MySQL user with a password.
![image](https://github.com/user-attachments/assets/ced07785-81fc-4bec-9c2c-19a2e5cdb7e5)


## 5. Modify the Website to Use the Database: 
Update your index.php to connect to MySQL to Display a message that includes the visitor's IP address and the current time. 
![image](https://github.com/user-attachments/assets/9687860e-4f44-40d8-8b3f-85557a3d4c28)
![image](https://github.com/user-attachments/assets/afcfa573-ba1c-47ac-9799-be1b9875f934)

## 6. Testing Locally: 
Access the website and verify
![Screenshot (1307)](https://github.com/user-attachments/assets/89448145-16a2-40dc-8b57-e1d9569627fb)
![image](https://github.com/user-attachments/assets/f944838e-d3ed-498a-986e-194442a7a87a)


## 7. Make the Website Publicly Accessible Through a Cloud Provider: 
edit security group on aws  to allow inbound HTTP (port 80) and HTTPS (port 443) traffic
![image](https://github.com/user-attachments/assets/5d9346e9-da97-4947-876a-b3a47ea5af6f)
![image](https://github.com/user-attachments/assets/20c249ac-8fdb-4bd5-bca6-0b05ee023b7b)
To reserve a domain name through DNS, I would purchase it from Route 53 on AWS or from a site like GoDaddy. Then, I would link the domain to my public IP address by creating an A record in the DNS settings. Once configured, I provide the users with my domain name or link to access the website.

# Sub-task #2: Git & GitHub 

## 1. Initialize Git Locally: 
![image](https://github.com/user-attachments/assets/000eaf47-884d-4549-8ec0-485fcfcfca4e)

## 2. Create a .gitignore File: 
![image](https://github.com/user-attachments/assets/9d52ff64-7249-4994-92e5-77846b13f871)

# Sub-task #3: Networking Basics 
## 1. IP Address: What it is and its purpose in networking.
****IP Address:**** is a unique numerical identifier assigned to every device connected to a network.
While communication, Router need IP address to forward data.

## 2. MAC Address: What it is, its purpose, and how it differs from an IP address. 
****MAC Address:**** MAC Address operates in the data link layer  ,While Ip Address operates in the network layer.
While communication, Switch needs MAC address to forward data, Router need IP address to forward data.

## 3. Switches, Routers, and Routing Protocols: Basic definitions and their roles in a network. 
****Switches:**** Primarily handle data forwarding within a single network (LAN), using MAC addresses to direct dataو Operates at Layer 2 (Data Link).
****Routers:**** Connect different networks (including LANs to WANs or the internet) and determine the best route for data to travel using IP addressesو Operates at Layer 3 (Network).
****Routing Protocols:**** Rules used by routers to exchange information and determine the best paths. Allow routers to automatically update their routing tables for efficient data forwarding, such as OSPF Protocol.

## 4. Remote Connection to Cloud Instance: Steps you would take to connect to your cloud-based Linux instance from a remote machine (e.g., using SSH). 
****1. Generate SSH Key Pair While Launch Instance:****
When launching an instance in AWS, create an SSH key pair (public/private). The private key is downloaded on your local machine, and the public key is uploaded to the instance in the ``` ~/.ssh/authorized_keys ``` file.

****2. Download the Private Key:****
After creating the key pair, download the private key file (usually with a .pem extension) to your local machine.

****3. Ensure Security Group Allows SSH Access (Port 22):****
Check your AWS security group settings to ensure inbound access is allowed on port 22 (SSH) from your IP address.

****4. Connect to the Instance from Your Local Machine:****
Use the following SSH command to connect:
```
ssh -i /path/to/my-key.pem username@public-ip
```
Replace /path/to/my-key.pem with the path to your private key, username with the appropriate username (e.g., ec2-user), and public-ip with your instance's public IP.
