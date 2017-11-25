Special Instructions 
===================


## Instructions to run the app
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

192.168.99.100 is the IP address of the docker container: IP address can be found using:   
First get the container ID:  ```docker ps```     
Use the container ID to run:  ```docker inspect <container ID>```


## Brief structure of root directory
Birth-Certificates-on-FHIR (root directory)   
|--- project (directory)    
|--- docker-compose.yml     
|--- .......        
|--- Final Delivery (directory)     
|  &nbsp;&nbsp;  &nbsp;&nbsp;  +---project (directory)     
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- docker-compose.yml     
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- .......         
The project codes are also organized in Final Delivery directory. You can run ```docker-compose up``` at root directory or at Final Delivery directory. The two project directories and two docker-compose.yml files are the same. File docker-compose.yml need to be with the project (directory) in the same folder in order to run docker commands properly.     
## Add data to FHIR server
Two babies' data are loaded to the provided FHIR server for test purpose. More data can be uploaded using tag-uploader	(Detailed instructions	can be found at	*https://github.com/smart-on-fhir/tag-uploader*)   
