Catalog
===================


**Team Name:** iHealth  
**Team Members:** Xiaoming Su, Lu Wang, Xue Liang, Lei Fang, Dong Li, Bo Lin  
**Project Name:** Birth Certificates on FHIR  
**GitHub link:** *https://github.gatech.edu/gt-hit-fall2017/Birth-Certificates-on-FHIR*  

## Table of contents
The structure of the root directory is listed below:     
Birth-Certificates-on-FHIR – (root directory)   
|--- project – (directory)    
|--- docker-compose.yml     
|--- markdown doc – (directory)     
|--- ppt – (directory)             
|--- Final Delivery – (directory)     
|  &nbsp;&nbsp;  &nbsp;&nbsp;  +--- project – (directory)    
|  &nbsp;&nbsp;  &nbsp;&nbsp;  +--- markdown doc – (directory)    
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- docker-compose.yml      
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- catalog.pdf   
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- Final Gant Chart – iHealth.pdf   
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- Manual – iHealth.pdf   
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- Special Instructions – iHealth.pdf  
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- Research – (Directory) 

All the project codes are located in the project directory. The two project directories are the same.  Here are the structure and elements introduction of the project directory:   
|--- project – (directory)     
|  &nbsp;&nbsp;  &nbsp;&nbsp;  +--- mysql – (directory)   
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; +--- account.sql  –  *(the table created for authentication, e.g, login )*     
|   &nbsp;&nbsp;  &nbsp;&nbsp; +--- web   
|  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;+--- babydatabase  –  *(directory: contains the babies' data we uploaded to the FHIR server )*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- img  –  *(directory: contains the images needed for web design)*   
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- about.php  –  *(about webpage)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- form.php  –  *(form webpage)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- index.php  –  *(index webpage)*     
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- login.php  –  *(login webpage)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- logout.php  –  *( php action to logout of the user account)*  
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- register.php  –  *(register webpage)*      
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- search.php  –  *(search webpage)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- submit.php  –  *(submit webpage)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- app.css  –  *(web style)*    
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- fhir-client.js  –  *(SMART on FHIR JavaScript Client Library)*   
|  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;+--- populateForm.js  –  *(extract data form EHR and fill registration form)*    



