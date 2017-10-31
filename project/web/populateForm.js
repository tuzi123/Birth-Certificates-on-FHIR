function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}

var demo = {
        serviceUrl: "https://sb-fhir-dstu2.smarthealthit.org/api/smartdstu2/open",
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
      });

function getVaccineCode (vacCodings) {
            var coding = vacCodings.find(function(c){
                return c.system == "http://hl7.org/fhir/sid/cvx";
            });
            return coding.code 
        }


var hepAData;
var hepRefused=true;
smart.patient.api.search({count:100, type: "Immunization", query: {patient: demo.patientId},
        }).then(function(r){
            document.getElementById("chkHepRefused").checked = true;
            for (re of r.data.entry) {
              var rx = re.resource; 
              if(getVaccineCode(rx.vaccineCode.coding)=="83"){
                document.getElementById("chkHepVac").checked = true;
                hepAData = rx.date;
                var hepADataFill = document.getElementById("HepDate");
                hepADataFill.value = hepAData.substring(0,10);
                hepRefused=false;
                document.getElementById("chkHepRefused").checked = false;
                break;}
            };
        });


