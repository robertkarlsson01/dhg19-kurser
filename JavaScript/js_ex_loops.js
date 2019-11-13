/*var i = 0; //deklarerar räknare

//jämför om i är mindre än 3
while( i < 5 ) {
    console.log('Räknaren i = ' + i);
    i++; //ökar räknaren i++ === i+1
}

//samma med for-loop
for(var j = 0; j < 3; j++) {
    console.log('for-räknaren j = ' + j);
}

//gör en array (samling, tabell)
var myCars = ['Saab', 'Volvo', 'Seat', 'Ford'],
    myCarsLength = myCars.length; //antal värden i arrayn

    console.log(myCarsLength);

for(j=0; j < myCarsLength; j++) {
    console.log(myCars[j]);
}*/
var i = 0,
    rad = 5;
    
  


while(i < 20) {
    i++;
    console.log( 'hej på dej rad ' + i );
}
for(var x = 10; x < 21; x++) {
    
    
    console.log( 'for räknaren x =' + x);

}
i = 0;
while(i < 20) {
    i=i+2;
    console.log( 'hej på dej rad ' + i );
}
i = 0;
var uppg7 = '';
while(i < 10) {
    uppg7 += i + '<br>';
    i++;
    
}
document.querySelector('#uppg7').innerHTML = uppg7;

 var uppg8 = '';
if(rad == 0) {
    document.querySelector('#uppg8').innerHTML = 'värdet är noll' ;
    } else if(rad == 1) {
        document.querySelector('#uppg8').innerHTML = 'endast en rad' ;
    } else if(rad >= 2 && rad <= 10) {
        var y = 2;
        while(y <= rad) {
        uppg8 += 'detta är rad' + y;
        y++;
        }
        document.querySelector('#uppg8').innerHTML = uppg8 ;

    } else {
        document.querySelector('#uppg8').innerHTML = 'för mycket rader eller ogiltigt värde' ;    
    }