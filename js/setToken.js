function setAuthKey(){
    var value = "; " + document.cookie;
    var parts = value.split("csrf_token=");
    document.getElementById("csrf_token").setAttribute('value', parts[1]) ;
}