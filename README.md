# Birth-Certificates-on-FHIR
Birth Certificates on FHIR

Mysql database name: registration

server: stu3



## Steps to launch application using docker
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
