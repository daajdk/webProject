/**
 *Function will be used to autofill the city that the customer inputs.
 */
function initialize() 
{  

      var input_city = (document.getElementById('city'));
     	var autocomplete_city = new google.maps.places.Autocomplete(input_city);
}

google.maps.event.addDomListener(window, 'load', initialize);

