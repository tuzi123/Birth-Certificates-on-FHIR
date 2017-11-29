# Birth-Certificates-on-FHIR
Birth Certificates on FHIR

Mysql database name: registration

server: stu3



## Steps to launch application using docker
### Important
The port for web application is 8088. The port for FHIR server is 8080.      
192.168.99.100  (shown in the following instructions) is the IP address of the docker container: IP address can be found using:      

> First get the container ID:  ```docker ps```            
> Use the container ID to run to find container IP: ```docker inspect <container ID> ```

    
### Instructions to launch application
### Important notes
The port for web application is 8088. The port for FHIR server is 8080.      
192.168.99.100  (shown in the following instructions) is the IP address of the docker container: IP address can be found using:      
> First get the container ID:  ```docker ps```            
> Use the container ID to run to find container IP: ```docker inspect <container ID> ```      

If docker is running in the Virtual Machine ,the IP need to be found and website can be accessed at: *http://IP:8088/*. FHIR server can be accessed at: *http://IP:8080/*.    
Otherwise, the website can be accessed at: *http://localhost:8088/*. FHIR server can be accessed at: *http://localhost:8080/*.    
Please choose the correct URLs to access the website and FHIR server. Please replace the URLs in the following instructions according to docker container IP address.       
### Instructions
```docker-compose up``` can be run at either root directory or Final Delivery (directory). 
1. Download the Final Delivery folder
2. In docker terminal, go to the Final Delivery folder, run ```docker-compose up```
3. Find the IP address of the docker container: IP address can be found using:        
> First get the container ID:  ```docker ps```            
> Use the container ID to run to find container IP: ```docker inspect <container ID> ```     

4. FHIR server web page can be accessed at: *http://IP:8080/* The fhir server URL can be found in this page.
5. Update the FHIR URL in the file at ./project/web/populateForm.js at line 11.     
```javascript
9	var demo = 
10        //Please update the following URL to match the FHIR server
11        serviceUrl: "http://192.168.99.100:8080/baseDstu3",
12        patientId: getUrlVars()["BabyID"],
13        auth: {
14          type: 'none'
15        }}
```     
6. Navigate to *http://IP:8088/* to access the index page of the website.    

OR:
1. Download the root folder
2. In docker terminal, go to the root folder, run ```docker-compose up```
3. Find the IP address of the docker container: IP address can be found using:        
> First get the container ID:  ```docker ps```            
> Use the container ID to run to find container IP: ```docker inspect <container ID> ```     

4. FHIR server web page can be accessed at: *http://IP:8080/* The fhir server URL can be found in this page.
5. Update the FHIR URL in the file at ./project/web/populateForm.js at line 11.    
```javascript
9	var demo = 
10        //Please update the following URL to match the FHIR server
11        serviceUrl: "http://192.168.99.100:8080/baseDstu3",
12        patientId: getUrlVars()["BabyID"],
13        auth: {
14          type: 'none'
15        }}
```     
6. Navigate to *http://IP:8088/* to access the index page of the website.       
  
## Steps to setup server and access web application without using docker:
1. FHIR server:There are two options: 

    A. provided by Daniel Johnson (Piazza @494), test baby data can be updated to the server using https://github.com/smart-on-fhir/tag-uploader. 

    B. A new docker image of fhir server with 2 babies' EHR data is created by modifying Daniel Johnson's original fhir server. 
This command will launch the container:

    docker run -d -p 8080:8080 --name=my-fhir-server tuzi123/hapi-fhir-jpaserver:stu3
    
    Then point your web browser to: http://localhost:8080/

2. Local server for the web application can be set up using Xampp Apache (port need to be configured at 8080).
3. Database can also be set up using Xampp Mysql, the name of the database need to be "registration", the table can be set up based on the 
 account.sql.
4. Download the project folder and put it at xampp/hotdocs/
5. Access the web application at http://localhost:8080/..../index.php (point to the location of index.php file.)
