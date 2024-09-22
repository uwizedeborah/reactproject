<?php
include'header.php';
?>
<!DOCTYPE html>
<html lang="rw">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DDIN Agent Registration</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 50px auto;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
    }

    .btn-previous,
    .btn-next {
      width: 48%;
    }

    .progress {
      height: 20px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="form-container">
      <h2>DDIN Registration Form</h2>
      <div class="progress mb-4">
        <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
      </div>
      <p class="text-center">Step 1 of 5</p>

      <form id="registrationForm">
        <!-- Step 1 -->
        <div id="step1">
          <div class="mb-3">
            <label for="fullName" class="form-label">Amazina yose</label>
            <input type="text" class="form-control" id="fullName" placeholder="Andika Amazina yawe yose" required>
          </div>

          <div class="mb-3">
            <label for="idNumber" class="form-label">Nimero y’indangamuntu</label>
            <input type="text" class="form-control" id="idNumber" placeholder="Andika Nimero yawe y’indangamuntu" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Igitsina</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="Gabo" required>
              <label class="form-check-label" for="male">Gabo</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="Gore" required>
              <label class="form-check-label" for="female">Gore</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="mtnNumber" class="form-label">Nimero ya MTN ukoresha</label>
            <input type="tel" class="form-control" id="mtnNumber" placeholder="0788000000" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Andika Email yawe" required>
          </div>

          <div class="mb-3">
            <label for="educationLevel" class="form-label">Ikiciro cy'amashuri wize</label>
            <select id="educationLevel" class="form-select" required>
              <option value="" disabled selected>Hitamo Ikiciro cy'amashuri</option>
              <option value="primary">1-6 w'amashuri abanza</option>
              <option value="lower-secondary">1-3 w'amashuri yisumbuye</option>
              <option value="upper-secondary">4-6 w'amashuri yisumbuye</option>
              <option value="university">Kaminuza</option>
              <option value="technical">Imyuga</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="contactPerson" class="form-label">Amazina y'umuntu dushobora kukubonaho mugihe wowe utabonetse</label>
            <input type="text" class="form-control" id="contactPerson" placeholder="Andika Amazina y'uwo muntu" required>
          </div>

          <div class="mb-3">
            <label for="contactNumber" class="form-label">Nimero y'umuntu dushobora kukubonaho</label>
            <input type="tel" class="form-control" id="contactNumber" placeholder="0788000000" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Irangamimerere</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="maritalStatus" id="single" value="Ingaragu" required>
              <label class="form-check-label" for="single">Ingaragu</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="maritalStatus" id="married" value="Yubatse" required>
              <label class="form-check-label" for="married">Yubatse</label>
            </div>
          </div>

          <div class="btn-container">
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep(2)">Next</button>
          </div>
        </div>

        <!-- Step 2 -->
<div id="step2" style="display: none;">
  <p class="text-center">Step 2 of 5</p>

  <div class="mb-3">
    <label for="province" class="form-label">Hitamo Intara</label>
    <select id="province" class="form-select" required onchange="populateDistricts()">
      <option value="" disabled selected>Hitamo Intara</option>
      <option value="kigali">Kigali City</option>
      <option value="north">Amajyaruguru (Northern Province)</option>
      <option value="south">Amajyepfo (Southern Province)</option>
      <option value="east">Iburasirazuba (Eastern Province)</option>
      <option value="west">Iburengerazuba (Western Province)</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="district" class="form-label">Hitamo Akarere</label>
    <select id="district" class="form-select" required onchange="populateSectors()">
      <option value="" disabled selected>Hitamo Akarere</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="sector" class="form-label">Hitamo Umurenge</label>
    <select id="sector" class="form-select" required onchange="populateIsibo()">
      <option value="" disabled selected>Hitamo Umurenge</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="isibo" class="form-label">Hitamo Isibo</label>
    <select id="isibo" class="form-select" required>
      <option value="" disabled selected>Hitamo Isibo</option>
    </select>
  </div>

  <div class="btn-container">
    <button type="button" class="btn btn-secondary btn-previous" onclick="prevStep(1)">Previous</button>
    <button type="button" class="btn btn-primary btn-next" onclick="nextStep(3)">Next</button>
  </div>
</div>

<script>
  // Define the districts, sectors, and isibo by location
  const districtsByProvince = {
    kigali: ["Nyarugenge", "Gasabo", "Kicukiro"],
    north: ["Gakenke", "Musanze", "Gicumbi", "Burera", "Rulindo"],
    south: ["Nyanza", "Huye", "Muhanga", "Kamonyi", "Gisagara", "Ruhango"],
    east: ["Nyagatare", "Gatsibo", "Kayonza", "Rwamagana", "Kirehe"],
    west: ["Rubavu", "Karongi", "Nyabihu", "Rusizi", "Nyamasheke"]
  };

  const sectorsByDistrict = {
    Nyarugenge: ["Nyamirambo", "Kimisagara", "Nyarugenge"],
    Gasabo: ["Remera", "Kimironko", "Kacyiru"],
    Kicukiro: ["Kicukiro", "Kanombe", "Gahanga"],
    Gakenke: ["Gakenke Sector 1", "Gakenke Sector 2"],
    // Add more sectors for other districts here
  };

  const isiboBySector = {
    Nyamirambo: ["Isibo 1", "Isibo 2", "Isibo 3"],
    Kimisagara: ["Isibo 1", "Isibo 2"],
    // Add more isibo for other sectors here
  };

  // Populate districts based on selected province
  function populateDistricts() {
    const provinceSelect = document.getElementById("province");
    const districtSelect = document.getElementById("district");
    const selectedProvince = provinceSelect.value;

    districtSelect.innerHTML = '<option value="" disabled selected>Hitamo Akarere</option>';
    const districts = districtsByProvince[selectedProvince] || [];
    districts.forEach(district => {
      const option = document.createElement("option");
      option.value = district;
      option.textContent = district;
      districtSelect.appendChild(option);
    });

    document.getElementById("sector").innerHTML = '<option value="" disabled selected>Hitamo Umurenge</option>';
    document.getElementById("isibo").innerHTML = '<option value="" disabled selected>Hitamo Isibo</option>';
  }

  // Populate sectors based on selected district
  function populateSectors() {
    const districtSelect = document.getElementById("district");
    const sectorSelect = document.getElementById("sector");
    const selectedDistrict = districtSelect.value;

    sectorSelect.innerHTML = '<option value="" disabled selected>Hitamo Umurenge</option>';
    const sectors = sectorsByDistrict[selectedDistrict] || [];
    sectors.forEach(sector => {
      const option = document.createElement("option");
      option.value = sector;
      option.textContent = sector;
      sectorSelect.appendChild(option);
    });

    document.getElementById("isibo").innerHTML = '<option value="" disabled selected>Hitamo Isibo</option>';
  }

  // Populate isibo based on selected sector
  function populateIsibo() {
    const sectorSelect = document.getElementById("sector");
    const isiboSelect = document.getElementById("isibo");
    const selectedSector = sectorSelect.value;

    isiboSelect.innerHTML = '<option value="" disabled selected>Hitamo Isibo</option>';
    const isibos = isiboBySector[selectedSector] || [];
    isibos.forEach(isibo => {
      const option = document.createElement("option");
      option.value = isibo;
      option.textContent = isibo;
      isiboSelect.appendChild(option);
    });
  }
</script>


        <!-- Step 3 -->
        <div id="step3" style="display: none;">
          <p class="text-center">Step 3 of 5</p>

          <div class="mb-3">
            <label for="businessName" class="form-label">Izina ry' ubucuruzi bwawe</label>
            <input type="text" id="businessName" class="form-control" placeholder="Andika izina ry'ubucuruzi bwawe nkuko byanditse kuri RDB cg ku ipatante" required>
          </div>

          <div class="mb-3">
            <label for="tinNumber" class="form-label">TIN Number yawe</label>
            <input type="text" id="tinNumber" class="form-control" placeholder="TIN Number yawe" required>
          </div>

          <div class="mb-3">
            <label for="businessType" class="form-label">Hitamwo ubwoko bwa bizinesi yawe</label>
            <select id="businessType" class="form-select" required>
              <option value="" disabled selected>Hitamwo ubwoko bwa bizinesi yawe</option>
              <option value="sms_reseller">SMS Reselling</option>
              <option value="bk_agent">BK Agent</option>
              <option value="electronic">Ibikoresho by'ikoranabuhanga</option>
            </select>
          </div>

          <div class="mb-3">
  <label for="services" class="form-label">Hitamo Serivise ushaka kongeraho</label><br>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="service1" name="services" value="sms_reselling">
    <label class="form-check-label" for="service1">SMS Reselling</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="service2" name="services" value="bk_agent">
    <label class="form-check-label" for="service2">BK Agent</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="service3" name="services" value="airtime_reseller">
    <label class="form-check-label" for="service3">Airtime Reseller</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="service4" name="services" value="mobile_money">
    <label class="form-check-label" for="service4">Mobile Money Agent</label>
  </div>
</div>


          <div class="btn-container">
            <button type="button" class="btn btn-secondary btn-previous" onclick="prevStep(2)">Previous</button>
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep(4)">Next</button>
          </div>
        </div>

        <!-- Step 4 -->
        <div id="step4" style="display: none;">
          <p class="text-center">Step 4 of 5</p>

          <div class="mb-3">
            <label for="idUpload" class="form-label">Upload ID</label>
            <input type="file" id="idUpload" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="rdbCertificateUpload" class="form-label">Upload RDB Certificate</label>
            <input type="file" id="rdbCertificateUpload" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="photoUpload" class="form-label">Upload Short Photo</label>
            <input type="file" id="photoUpload" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="characterCertificateUpload" class="form-label">Upload Character Certificate</label>
            <input type="file" id="characterCertificateUpload" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="criminalRecord" class="form-label">Ufite ibyaha byigeze kugufata?</label><br>
            <input type="radio" id="criminalYes" name="criminalRecord" value="Yes" required> Yego<br>
            <input type="radio" id="criminalNo" name="criminalRecord" value="No" required> Oya<br>
          </div>

          <div class="mb-3" id="uploadCriminalDocuments" style="display: none;">
            <label for="criminalRecordUpload" class="form-label">Upload Criminal Record Documents</label>
            <input type="file" id="criminalRecordUpload" class="form-control">
          </div>

          <div class="btn-container">
            <button type="button" class="btn btn-secondary btn-previous" onclick="prevStep(3)">Previous</button>
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep(5)">Next</button>
          </div>
        </div>

        <!-- Step 5 -->
        <div id="step5" style="display: none;">
          <p class="text-center">Step 5 of 5</p>

          <p class="text-center">Step 5 of 5</p>

      <form>
        <!-- Payment Instructions -->
        <div class="mb-3">
          <p>
            Kugirango ubusabe bwanyu bukorwe, murasabwa kubanza kwishura amafaranga y'u Rwanda ibihumbi makumyabiri (20.000Rwf) kuri MOPay code <strong>363386</strong> ibaruye kuri DISABILITY DIGITAL INCLUSION.
          </p>
        </div>

        <!-- Payment Confirmation Checkbox -->
        <div class="mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="paymentConfirmed" required>
            Ndemeza ko nishyuye 20.000Rwf kuri momo code 363386 ibaruye kuri DISABILITY DIGITAL INCLUSION
          </label>
        </div>

        <!-- Deduction Option Confirmation -->
        <div class="mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="commissionDeductionConfirmed" required>
            Ndemeza ko bazayakata kuri commission zanjye nintangira gukora
          </label>
        </div>

        <!-- Agreement to Terms and Conditions -->
        <div class="mb-3">
          <p>
            Umaze kuzuza ndetse ukanohereza iyi fomu isaba kuba umu agenti wa serivisi wasabye binyuze muri DDIN, uraba wemeye ko wasomye neza amategeko n'amabwiriza afatwa nk'amasezerano agenga ab'agent ba DDIN, ndetse wemeye no kujyengwa nayo mugihe cyose ukora service yaba izitangwa na DDIN cyangwa iz'abafatanyabikorwa ba DDIN.
          </p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="agreeTerms" id="agreeYes" value="Yego" required>
            <label class="form-check-label" for="agreeYes">
              Yego
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="agreeTerms" id="agreeNo" value="Hoya" required>
            <label class="form-check-label" for="agreeNo">
              Hoya
            </label>
          </div>
        </div>


          <div class="btn-container">
            <button type="button" class="btn btn-secondary btn-previous" onclick="prevStep(4)">Previous</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
      <a href="dashboard.php">Go back </a>
    </div>
  </div>

  <script>
// Function to handle the display of different steps
function nextStep(stepNumber) {
  const currentStep = document.getElementById(`step${stepNumber - 1}`);
  const nextStep = document.getElementById(`step${stepNumber}`);
  currentStep.style.display = "none";
  nextStep.style.display = "block";

  // Update the progress bar
  const progressBar = document.getElementById("progress-bar");
  const stepPercentage = stepNumber * 20;
  progressBar.style.width = `${stepPercentage}%`;
  progressBar.setAttribute("aria-valuenow", stepPercentage);
  progressBar.textContent = `Step ${stepNumber} of 5`;
}

function prevStep(stepNumber) {
  const currentStep = document.getElementById(`step${stepNumber + 1}`);
  const prevStep = document.getElementById(`step${stepNumber}`);
  currentStep.style.display = "none";
  prevStep.style.display = "block";

  // Update the progress bar
  const progressBar = document.getElementById("progress-bar");
  const stepPercentage = stepNumber * 20;
  progressBar.style.width = `${stepPercentage}%`;
  progressBar.setAttribute("aria-valuenow", stepPercentage);
  progressBar.textContent = `Step ${stepNumber} of 5`;
}

// Toggle display of criminal record upload section
document.querySelectorAll('input[name="criminalRecord"]').forEach(radio => {
  radio.addEventListener('change', function() {
    const uploadSection = document.getElementById('uploadCriminalDocuments');
    if (this.value === 'Yes') {
      uploadSection.style.display = 'block';
    } else {
      uploadSection.style.display = 'none';
    }
  });
});
</script>

</body>

</html>
