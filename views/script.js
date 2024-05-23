// -------------------------inserer les chmps des  points automatiquement------------------------------
function updatePoints() {
  var consultationValue =
    parseFloat(document.getElementById("consultation").value) || 0;
  var populationValue =
    parseFloat(document.getElementById("population").value) || 0;
  var accouchementValue =
    parseFloat(document.getElementById("accouchement").value) || 0;

  var consultationPoints = consultationValue / 1000;
  var populationPoints = populationValue / 1000;
  var accouchementPoints = accouchementValue / 100;

  document.getElementById("consultation_point").value = consultationPoints;
  document.getElementById("population_point").value = populationPoints;
  document.getElementById("accouchement_point").value = accouchementPoints;

  var totalPoints = consultationPoints + populationPoints + accouchementPoints;
  document.getElementById("nbrtotal_point").value = totalPoints.toFixed(3);
}

// ----------------------Lister les option de select--------------------
var selectElement = document.getElementById("formationSanitaire");

var optionsList = selectElement.getElementsByTagName("option");

var optionsArray = Array.prototype.slice.call(optionsList);

optionsArray.sort(function (a, b) {
  return a.value.localeCompare(b.value);
});

while (selectElement.firstChild) {
  selectElement.removeChild(selectElement.firstChild);
}

optionsArray.forEach(function (option) {
  selectElement.appendChild(option);
});

//----------------------------filtrer l'Affichage ----------------------

function filterTable(value) {
  var table = document.getElementById("medicaments-table");
  var rows = table.getElementsByTagName("tr");
  document.getElementById("selected-formation_sanitaire").textContent = value;

  for (var i = 0; i < rows.length; i++) {
    var row = rows[i];
    var formationSanitaireCell = row.cells[0];
    if (formationSanitaireCell.textContent.indexOf(value) === -1) {
      row.style.display = "none";
    } else {
      row.style.display = "";
    }
  }
}
