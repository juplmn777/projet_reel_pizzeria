var today = new Date();
var thisDay = today.getDay();
var thisTime = today.getHours() + ":" + today.getMinutes();
var divMap = document.getElementById("map");
var pCity = document.getElementById("city");
var pCityAddress = document.getElementById("city_address");
var pCurrentStatus = document.getElementById("current_status");

switch (thisDay) {
  // Sunday
  case 0:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.2409872914463!2d2.294103015741689!3d50.73401907951545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcfed152c9fe2d%3A0xe3262e81bfc649cd!2sPlace+Roger+Salengro%2C+62510+Arques!5e0!3m2!1sfr!2sfr!4v1546610793030" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Arques";
  pCityAddress.innerHTML = `Place Roger Salengro<br>62510 Arques`;
  break;
  // Monday
  case 1:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.431967336685!2d2.325280015740917!3d50.711924779512266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcfe9bb652ba33%3A0xc30037ffac09ac86!2s2+Rue+Principale%2C+62120+Campagne-l%C3%A8s-Wardrecques!5e0!3m2!1sfr!2sfr!4v1546610544137" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Campagne-les-Wardrecques";
  pCityAddress.innerHTML = `2 rue principale<br>62120 Campagne-les-Wardrecques`;
  break;
  // Tuesday
  case 2:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.0012559690344!2d2.2430748157418425!3d50.73846557951618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcff5503e46b6d%3A0x711f43c864f2f83e!2sPlace+de+l&#39;H%C3%B4tel-de-ville%2C+62219+Longuenesse!5e0!3m2!1sfr!2sfr!4v1545997895374" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Longuenesse";
  pCityAddress.innerHTML = `Place de l'Hotel de Ville<br>62219 Longuenesse`;
  break;
  // Wednesday
  case 3:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.3271852521543!2d2.279675215740267!3d50.69531267950988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcffabc5e95cd1%3A0x1866f6176b319f89!2s170+Rue+de+Th%C3%A9rouanne%2C+62575+Heuringhem!5e0!3m2!1sfr!2sfr!4v1546610680268" height="100%" width="100%" frameborder="0" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Heuringhem";
  pCityAddress.innerHTML = `170 rue de Thérouanne<br>62575 Heuringhem`;
  break;
  // Thursday
  case 4:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.42619210781!2d2.1944513157395487!3d50.67491357950688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc5523f1d04e3b%3A0x412d7dc3dccd92e1!2s12+Route+nationale%2C+62570+Pihem!5e0!3m2!1sfr!2sfr!4v1546611044428" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Bientques";
  pCityAddress.innerHTML = `12 route nationale<br>62570 Bientques`;
  break;
  // Friday
  case 5:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.4282323488114!2d2.323837115740854!3d50.7119940795123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcfe9a40d6dc55%3A0x1163dfe9b4cf2378!2s160+Avenue+du+G%C3%A9n%C3%A9ral+de+Gaulle%2C+62510+Arques!5e0!3m2!1sfr!2sfr!4v1546610876685" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Arques";
  pCityAddress.innerHTML = `160 avenue du Général de Gaulle<br>62510 Arques`;
  break;
  // Saturday
  case 6:
  divMap.innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.431967336685!2d2.325280015740917!3d50.711924779512266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcfe9bb652ba33%3A0xc30037ffac09ac86!2s2+Rue+Principale%2C+62120+Campagne-l%C3%A8s-Wardrecques!5e0!3m2!1sfr!2sfr!4v1546610544137" height="100%" width="100%" frameborder="0" style="border:0"></iframe>`;
  pCity.innerHTML = "Campagne-les-Wardrecques";
  pCityAddress.innerHTML = `2 rue principale<br>62120 Campagne-les-Wardrecques`;
  break;
}

if(thisTime >="18:30" && thisTime <= "22:30") {
  pCurrentStatus.innerHTML = `<i class="far fa-clock greenc"></i> Ouvert<br>`;
} else {
  pCurrentStatus.innerHTML = `<i class="far fa-clock redc"></i> Fermé<br>`;
}
