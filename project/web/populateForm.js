function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}

var demo = {
        // serviceUrl: "https://sb-fhir-dstu2.smarthealthit.org/api/smartdstu2/open",
        // serviceUrl: "http://192.168.99.100:8080/hapi-fhir-jpaserver-example/baseDstu2",
        serviceUrl: "http://192.168.99.100:8080/baseDstu3",
        patientId: getUrlVars()["BabyID"],
        auth: {
          type: 'none'
        }}

// http://localhost:8080/fhir-app/web/index.html
var smart = FHIR.client(demo);
var pq = smart.patient.read(); 

pq.then(function(p) {
    var gender = p.gender;
    var name = p.name[0];
    var firstName = name.given
    var LastName = name.family
    var firstNameFill = document.getElementById("childFirst");
    firstNameFill.value = firstName;
    var lastNameFill = document.getElementById("childLast");
    lastNameFill.value = LastName;
    var genderFill = document.getElementById("childGender");
    genderFill.value = gender;

    var birth = p.birthDate;
    var birthFill = document.getElementById("childBirth");
    birthFill.value = birth;

    if(p.address[0].use=="home"){
        var babyAddress = p.address[0].line;
        var addressFill = document.getElementById("homeAddress");
        addressFill.value = babyAddress;

        var babyCity = p.address[0].city;
        var cityFill = document.getElementById("childCity");
        cityFill.value = babyCity;

        var babyPC = p.address[0].postalCode;
        var postalCodeFill = document.getElementById("childPostCode");
        postalCodeFill.value = babyPC;

        var babyCountry = p.address[0].country;
        var countryFill = document.getElementById("childCountry");
        countryFill.value = babyCountry;

        var babyState = p.address[0].state;
        var stateFill = document.getElementById("childState");
        stateFill.value = babyState;
    }

    document.getElementById("DeceasedNo").checked = true;
    document.getElementById("DeceasedYes").checked = false;
    var deceased = p.deceased;
    if (deceased){
        document.getElementById("DeceasedYes").checked = true;
        document.getElementById("DeceasedNo").checked = false;}


    smart.patient.api.search({count:10, type: "Immunization", query: {patient: demo.patientId},
        }).then(function(r){
              for (re of r.data.entry) {
                var rx = re.resource; 
              if (rx.vaccineCode.text=="Hepatitis-A" && rx.status=="completed") {
                document.getElementById("chkHepVac").checked = true;
                hepAData = rx.date;
                var hepADataFill = document.getElementById("HepDate");
                hepADataFill.value = hepAData;
                }
              if (rx.vaccineCode.text=="Hepatitis-A" && rx.status=="refused") {
                document.getElementById("chkHepRefused").checked = true;}
            };
        });

// window.onload = function() {
//     document.getElementById("chkNoAbnormalConditions").checked = true;
// };
    smart.patient.api.search({count:10, type: "Procedure", query: {patient: demo.patientId},
        }).then(function(r){
              for (re of r.data.entry) {
              document.getElementById("chkNoAbnormalConditions").checked = true;
              var rx = re.resource; 
              if (rx.code.coding[0].code=="266700009" && rx.code.coding[0].system=="http://snomed.info/sct" && rx.status=="completed") {
                if (rx.note[0].text== "Assisted ventilation for > 6 hours"){
                    document.getElementById("chkAssistedVent6Hours").checked = true;
                    document.getElementById("chkNoAbnormalConditions").checked = false;
                }
                if (rx.note[0].text== "Assisted ventilation immediately following delivery (first 30 minutes)"){
                    document.getElementById("chkAssistedVent30Mins").checked = true;
                    document.getElementById("chkNoAbnormalConditions").checked = false;}
                };
            };
        });

    smart.patient.api.search({count:20, type: "Observation", query: {patient: demo.patientId},
        }).then(function(r){
              for (re of r.data.entry) {
              var rx = re.resource; 
              if (rx.code.coding[0].code=="54775-2" && rx.code.coding[0].system=="http://loinc.org") {
                document.getElementById("chkAnemia").checked = true;
                document.getElementById("chkNoAbnormalConditions").checked = false;
                };
            };
        });

    smart.patient.api.search({count:20, type: "Observation", query: {patient: demo.patientId},
        }).then(function(r){
              for (re of r.data.entry) {
              var rx = re.resource; 
              if (rx.code.coding[0].code=="46775006" && rx.code.coding[0].system=="http://snomed.info/sct") {
                document.getElementById("chkRDS").checked = true;
                document.getElementById("chkNoAbnormalConditions").checked = false;
                };
            };
        });

    smart.patient.api.search({count:20, type: "Observation", query: {patient: demo.patientId},
        }).then(function(r){
              for (re of r.data.entry) {
              var rx = re.resource; 
              if (rx.code.coding[0].code=="91175000" && rx.code.coding[0].system=="http://snomed.info/sct") {
                document.getElementById("chkSeizure").checked = true;
                document.getElementById("chkNoAbnormalConditions").checked = false;
                };
            };
        });


      }, function (error) {
    // console.error("uh oh: ", error); 
    alert("Cannot find the baby with the given ID, please double check!");
    // document.getElementById("submitForm").disabled = true;
    location.href = 'search.php';
});

