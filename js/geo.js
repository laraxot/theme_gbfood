var geocoder;
if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 

//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert("Geocoder failed");
}

function codeLatLng(lat, lng) {
	$.ajax({
		type:'get',
		url: base_url+'geo/latlong/'+lat+'/'+lng,
		success: function(data, status) {
            $('#place_name').html(data.place_name +' ('+data.admin_code2+')');
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
        	html='';
        	for(i in XMLHttpRequest){
        		html='\n\r'+i+'  =  '+ XMLHttpRequest[i];
        	}
        	alert(html);
            alert("Status: " + textStatus+"  \n\r Error: " + errorThrown); 
        }       
	});
    	
	
}