
function numbers(){for (let i = 1; i < 101; i++) {
    if (i % 15 == 0) {
        console.log('Super Faktura');
        document.getElementById("demo").innerHTML += "<br> Super Faktura" ;

    }
    else if (i % 5 == 0){
        console.log('Faktura');
        document.getElementById("demo").innerHTML += "<br> Faktura" ;
    }
    else if (i % 3 == 0){
        console.log('Super');
        document.getElementById("demo").innerHTML +=  "<br> Super" ;
    }
    else{
        console.log(i);
        document.getElementById("demo").innerHTML += "<br>" + i ;
    }
  }
}
  
