# Birth-Certificates-on-FHIR
Birth Certificates on FHIR

Mysql database name: registration

server: stu3

## Background

This CDC-Utah Birth Certificates On FHIR program is a web based FHIR interface birth registration application.  Currently birth reporting from Hospital EHRs to state public health departments include a manual component where a clerk abstracts medical information on newborn baby and mother, and keys into a web form.  Because the information is hand-written onto a facility worksheet which caused time-consuming and error-prone.  A way to overcome this challenge is to develop a web-based application-- an electronic birth registration system which can abstract clinical information from the records of both the mother and the newborn and submit to the state health department birth certificate registry in an efficient an accurate way. 

## Steps to launch application using docker
### Important
The port for web application is 8088. The port for FHIR server is 8080.      
192.168.99.100  (shown in the following instructions) is the IP address of the docker container: IP address can be found using:      

> First get the container ID:  ```docker ps```            
> Use the container ID to run to find container IP: ```docker inspect <container ID> ```

         
If docker is running in the Virtual Machine ,the IP need to be found and website can be accessed at: *http://IP:8088/*. FHIR server can be accessed at: *http://IP:8080/*.    
Otherwise, the website can be accessed at: *http://localhost:8088/*. FHIR server can be accessed at: *http://localhost:8080/*.    
Please choose the correct URL to access the website and FHIR server. Please replace the URL in the following instructions according to docker container IP address.    
### Instructions
```docker-compose up``` can be run at either root directory or Final Delivery (directory. )
1. Download the Final Delivery folder
2. In docker terminal, go to the Final Delivery folder, run ```docker-compose up```
3. Navigate to *http://192.168.99.100:8088/* to access the index page of the website.
4. FHIR server web page can be accessed at: *http://192.168.99.100:8080/*

OR:
1. Download the root folder
2. In docker terminal, go to the root folder, run ```docker-compose up```
3. Navigate to *http://192.168.99.100:8088/* to access the index page of the website.
4. FHIR server web page can be accessed at: *http://192.168.99.100:8080/*      
  
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
