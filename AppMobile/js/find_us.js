var today = new Date();
var thisDay = today.getDay();
var todayAddress = document.getElementById("today_address");

switch (thisDay) {
  // Sunday
  case 0:
  todayAddress.innerHTML = `Place Roger Salengro 62510 Arques`;
  break;
  // Monday
  case 1:
  todayAddress.innerHTML = `2 rue principale 62120 Campagne-les-Wardrecques`;
  break;
  // Tuesday
  case 2:
  todayAddress.innerHTML = `Place de l'Hotel de Ville 62219 Longuenesse`;
  break;
  // Wednesday
  case 3:
  todayAddress.innerHTML = `170 rue de Thérouanne 62575 Heuringhem`;
  break;
  // Thursday
  case 4:
  todayAddress.innerHTML = `12 route nationale 62570 Bientques`;
  break;
  // Friday
  case 5:
  todayAddress.innerHTML = `160 avenue du Général de Gaulle 62510 Arques`;
  break;
  // Saturday
  case 6:
  todayAddress.innerHTML = `2 rue principale 62120 Campagne-les-Wardrecques`;
  break;
}
