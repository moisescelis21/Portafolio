function rand_code(chars,lon){
	code="";
	for (x=0; x<lon; x++){
		rand=Math.floor(Math.random()*chars.length);
		code+=chars.substr(rand,1);
	}
	return code;
}
caracteres="0123456789abcdefABCDEF";
longitud=20;