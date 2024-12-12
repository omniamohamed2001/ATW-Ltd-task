# Sub-task #1: Linux Server Simulation (LAMP Setup) 
## 1. Install Required Packages: 
updates the local package index
![image](https://github.com/user-attachments/assets/0e881fa5-2818-471e-afb1-ab64e002f81d)
Install Apache, MySQL, and PHP on the Linux machine.
![image](https://github.com/user-attachments/assets/1051e654-3a76-4fb7-b653-3fe73f200fa2)
## 2. Configure Apache: 
enabling Apache to start with the OS, starting it, and ensuring it's running.
![image](https://github.com/user-attachments/assets/ef7e4a5e-92cb-4ae0-8aed-ac6494201a9f)
Test that Apache working.
![image](https://github.com/user-attachments/assets/5a3f5913-ed3e-433e-83ab-006f8dfbb065)
enabling MySQL to start with the OS, starting it, and ensuring it's running.
![image](https://github.com/user-attachments/assets/f9181002-8b0f-4895-b223-c773604ab061)


git my machine's ip to test from host's browser
![image](https://github.com/user-attachments/assets/b61426ec-a3f9-4a0c-8561-b1d49503db75)


## 3. Create a Simple Website: 
Replace index.html with a PHP file (e.g. index.php) that displays "Hello World!". 
![image](https://github.com/user-attachments/assets/c7bfa3da-821e-40bb-a8a9-7699a71d4d87)

edit configration file to set priorety to open index.php first
![image](https://github.com/user-attachments/assets/f4b15671-8786-4ed4-b751-246b5f5e9ed4)
![image](https://github.com/user-attachments/assets/fafe1893-672b-40ef-920a-bfd2a274249d)


reload Apachce configuration file and Verify
![image](https://github.com/user-attachments/assets/0a7b4bb2-8a40-40d6-a7aa-5df60ef4dfba)

## 4. Configure MySQL:
Secure the MySQL installation (mysql_secure_installation or similar).
![image](https://github.com/user-attachments/assets/7de122f9-1e6e-453c-b2ec-291738a8b9f4)
Create a new database (e.g. web_db) and a new MySQL user with a password.
![image](https://github.com/user-attachments/assets/56ea9047-8fa9-4fb6-b1bc-2d035e879648)


## 5. Modify the Website to Use the Database: 
Update your index.php to connect to MySQL to Display a message that includes the visitor's IP address and the current time. 
![image](https://github.com/user-attachments/assets/9fd8a271-42b4-4cb8-b6bb-73fea2bdc6d8)
![image](https://github.com/user-attachments/assets/c2426e38-cb22-44e4-b077-b4e667a43969)




## 6. Testing Locally: 
Access the website and verify
![image](https://github.com/user-attachments/assets/267e09c0-dd07-4adc-8b3b-b9d2be52e7e5)
![image](https://github.com/user-attachments/assets/1ee3a007-3109-40ea-b09a-213dd442ca67)



## 7. Make the Website Publicly Accessible Through a Cloud Provider: 
edit security group on aws  to allow inbound HTTP (port 80) and HTTPS (port 443) traffic
![image](https://github.com/user-attachments/assets/dc124e9d-d654-480d-b64a-fe6d174f20d2)
![image](https://github.com/user-attachments/assets/22f126d5-35c2-4760-b3b6-5c2bff30a977)
To reserve a domain name through DNS, I would purchase it from Route 53 on AWS or from a site like GoDaddy. Then, I would link the domain to my public IP address by creating an A record in the DNS settings. Once configured, I provide the users with my domain name or link to access the website.

# Sub-task #2: Git & GitHub 

## 1. Initialize Git Locally: 
![image](https://github.com/user-attachments/assets/6a96da05-034b-4640-9b27-680a879349dc)

## 2. Create a .gitignore File: 
![image](https://github.com/user-attachments/assets/6d042b94-eddf-472e-bc1d-3b9eec7aa184)

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
