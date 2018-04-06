$(function(){

    getApiResponse();

});

function getApiResponse(){
    $.post("http://api.ipstack.com/" + $('#userIP').html() + "?access_key=002022d28aa39d38591d57d5b3424036", function(result){
        var apiHTML = '';
        apiHTML = 
        '<div class="col-sm-12 col-md-4">'
            + '<p class="api_ip"><b>IP Address:</b> <span>' + result.ip + '</span></p>'
            + '<p class="api_continentName"><b>Continent Name:</b> <span>' + result.continent_name + '</span></p>'
            + '<p class="api_countryCode"><b>Country Code:</b> <span>' + result.country_code + '</span></p>'
            + '<p class="api_countryName"><b>Country Name:</b> <span>' + result.country_name + '</span></p>'
            + '<p class="api_countryCapital"><b>Country Capital:</b> <span>' + result.location['capital'] + '</span></p>'
            + '<p class="api_countryLanguage"><b>Country Language:</b> <span>' + result.location['languages'][0].native + '</span></p>'
            + '<p class="api_countryFlagEmoji"><b>Country Flag Emoji:</b> <span>' + result.location['country_flag_emoji'] + '</span></p>'
            + '<p class="api_countryCallingCode"><b>Country Calling Code:</b> <span>' + result.location['calling_code'] + '</span></p>'
            + '<p class="api_regionCode"><b>Region Code:</b> <span>' + result.region_code + '</span></p>'
            + '<p class="api_regionName"><b>Region Name:</b> <span>' + result.region_name + '</span></p>'
            + '<p class="api_city"><b>City:</b> <span>' + result.city + '</span></p>'
            + '<p class="api_zip"><b>Zip:</b> <span>' + result.zip + '</span></p>'
            + '<p class="api_latitude"><b>Latitude:</b> <span>' + result.latitude + '</span></p>'
            + '<p class="api_longitude"><b>Longitude:</b> <span>' + result.longitude + '</span></p>'
        + '</div>'
        + '<div class="col-sm-12 col-md-8">'
            + '<div class="row">'
                + '<div class="col-12 col-xs-offset-2 col-md-offset-2 col-lg-offset-4">'
                    + '<div id="googleMap"></div>'
                + '</div>'
            + '</div>'
            + '<div class="row">'
                + '<p class="api_countryFlag"><b>Country Flag:</b> <img class="img-responsive col-md-6" src="' + result.location['country_flag'] +'" alt="country flag"></p>'
            + '</div>'
        + '</div>';
        
        $('#apiResponseDiv').html(apiHTML);
        
        var uluru = {lat: result.latitude, lng: result.longitude};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

    });
}

function initMap(latitude, longitude) {
    
}