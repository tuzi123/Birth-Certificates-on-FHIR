function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}

var demo = {
        serviceUrl: "http://192.168.99.100:8080/hapi-fhir-jpaserver-example/baseDstu2",
        // patientId: "099e7de7-c952-40e2-9b4e-0face78c9d80",
        patientId: getUrlVars()["BabyID"],
        auth: {
          type: 'none'
        }}

var smart = FHIR.client(demo);
var pq = smart.patient.read();

pq.then(function(p) {
        var gender = p.gender;
        var name = p.name[0];
        var firstName = name.given
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
      });

function getVaccineCode (vacCodings) {
            var coding = vacCodings.find(function(c){
                return c.system == "http://hl7.org/fhir/sid/cvx";
            });
            return coding.code 
        }


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


