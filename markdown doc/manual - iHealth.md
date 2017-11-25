**iHealth Birth Certificate App User Manual**
=========================================

**Team Name:** iHealth  
**Team Members:** Xiaoming Su, Lu Wang, Xue Liang, Lei Fang, Dong Li, Bo Lin  
**Project Name:** Birth Certificates on FHIR  
**GitHub link:** *https://github.gatech.edu/gt-hit-fall2017/Birth-Certificates-on-FHIR*

## Introduction
The collection and submission of birth certificate information to state vital statistics agencies is currently the responsibility of birth certificate clerks, typically staff in medical records departments of hospitals. For each birth occurring in a hospital, birth clerks are required to abstract clinical information from the records of both the mother and the newborn. This information is hand-written onto a facility worksheet. A second worksheet, the mother’s worksheet, is completed by the mother and father, if applicable, and contains demographic information about the parents and the desired name of the newborn child. Both worksheets are entered into a web-based form called an electronic birth registration system (EBRS) and submitted to the state health department birth certificate registry.    
## System Requirements
• Operating Environment: IE, Safari, Chrome or Firefox.  
• CPU: 1.2 GHz and higher  
• RAM: 1.0 GB and larger  
• Internet access through cellular or WLAN is available when necessary.  
## Step by Step Setup
1. Download the Final Delivery folder
2. In docker terminal, go to the Final Delivery folder, run ```docker-compose up```
3. Navigate to *http://192.168.99.100:8088/* to access the index page of the website.
4. FHIR server web page can be accessed at: *http://192.168.99.100:8080/*
## FHIR Server Introduction
A new docker image of FHIR server with 2 babies' EHR data is created by modifying Daniel Johnson's original FHIR server.   
*Baby1:* Name: **BabyTest Ihealth**, ID: **cf-1509653935164**  
*Baby2:* Name: **BabyBoy Ihealth**, ID: **cf-11509653935164**
![](https://lh3.googleusercontent.com/-7Kpq6U3ljI0/WhkR7Pwk8EI/AAAAAAAAAK0/Qj0R-Q998GkuPye3uK6CWFKYeFSuKdSzACLcBGAs/s0/manual01.png "manual01.png")
 

## Web Application User Instruction
1. Go to the website index page (http://192.168.99.100:8088/), click the "Get Started!" button. The user will be navigated to login page if the user is not logged in. If the user already logged in, the search page will show up.
![](https://lh3.googleusercontent.com/-wRBPqYDaMMY/WhkSF5yj6qI/AAAAAAAAAK8/rnWkkDdSHrEg-T4dbZTlrHbsvYq5OySCwCLcBGAs/s0/manual02.jpg "manual02.jpg")
 
2. You need to login as an authorized user in order to deliver baby’s registration form.  
There are two choices:  
* Login with the test username and password:  
    Username1: **iHealth**   &nbsp; &nbsp; Password: **1**  
    Username2: **test01**     &nbsp; &nbsp; &nbsp;&nbsp; Password: **123456**    
    Username3: **test02**    &nbsp; &nbsp; &nbsp; &nbsp;Password: **123456**   
![](https://lh3.googleusercontent.com/-8M0_lrj51u4/WhkSMhDrnoI/AAAAAAAAALE/XP_XQIabYFIkM1SvBn5dkRXTLvSqBgSQwCLcBGAs/s0/manual03.jpg "manual03.jpg")
* Register as a new user. There will be notification if new register is duplicated with old ones. After registration, the user can login with the registered username.  After login, the user can also logout the system easily. 
![](https://lh3.googleusercontent.com/-wsE7B1tu8K4/WhkSTkR1sxI/AAAAAAAAALM/KeJ7Z0hVoJExjiO8lGuOsnvIewmlBV2HACLcBGAs/s0/manual04.jpg "manual04.jpg")
 
3. After login, the user will be navigated to the search page automatically. The user can search the baby’s information in the database using ID (e.g., cf-1509653935164).           
![](https://lh3.googleusercontent.com/-k9B-Rlnuprs/WhkSioX21oI/AAAAAAAAALg/j1vlQXFOEIUp8-oHIPnV7wiJlAxRo-4UQCLcBGAs/s0/manual05.jpg "manual05.jpg")
 
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;There will be alert if the baby ID cannot be found in the database:
    ![](https://lh3.googleusercontent.com/-ZPXq_jPkwNg/WhkSae9SRwI/AAAAAAAAALY/2p9R5VK_m0gfiKgm_gSNuFE4RSkYTrGdwCLcBGAs/s0/manual06.png "manual06.png")
 
4. Click “SEARCH”, then the populated form will show up. Only the information that can be found in the EHR database will be populated.
![enter image description here](https://lh3.googleusercontent.com/-m0T46ZEWw0w/WhkdldQaSVI/AAAAAAAAANw/msWgbMV_0OQ6usDcM1uijzu4lZCVpGLqACLcBGAs/s0/manual07.png "manual07.png")
 
5. The user can manually input the information according to mother’s worksheet. After confirming all the information is correct, the user can click “confirm and submit!”  
![enter image description here](https://lh3.googleusercontent.com/-28w1DU7QVgE/WhkdgZOltiI/AAAAAAAAANo/N9RfeXTY2l4dghTd27Bdt_It0Iz7Ix-UACLcBGAs/s0/manual08.png "manual08.png")
 
6. Then form will be delivered to the birth registry. The user will be navigated to search page again if the user clicks on “Deliver another baby’s registration form!”.  
![](https://lh3.googleusercontent.com/-cd8peXQXLw0/WhkS6OfuHjI/AAAAAAAAAMA/7vfWz-XVSWQ92ODBmBezh34FcXUiRiLPACLcBGAs/s0/manual09.jpg "manual09.jpg")
 
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;*Note: We didn't submit the data to the birth registry server. This may have confidentail problems, we also contacted our mentor Dr.Duncan and he agreed that this part is optional.*

7. There’s also a brief introduction about the web application by clicking on “About” in the navigation bar.
![](https://lh3.googleusercontent.com/-jn0jjxJPPkk/WhkdWqRabWI/AAAAAAAAANg/6UlJpQw43VkTTftTtox-8pW9iumRYs09wCLcBGAs/s0/manual10.jpg "manual10.jpg")
 
## Technical Support
**Technical support:** iHealth Team

