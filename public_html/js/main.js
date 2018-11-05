var Cars = {};
$.getJSON('js/cars.json', callbackFuncWithData);
function callbackFuncWithData(json) {
  Cars = json;
  console.log(Cars); // this will show the info it in firebug console
}