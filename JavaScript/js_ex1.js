//Deklarerar variabel:
var name = 'Paul',
    num1 = 15,
    num2 = 4.5,
    multiplikation = num1 * num2;

//Skriver ut variabel
console.log(multiplikation);

console.log('hej på er alla!');

//kopplar ihop teckensträng och variabel
console.log('Hej på dig, ' + name + '!!!!');

document.querySelector('#output').innerHTML = num1 + ' gånger ' + num2 + ' = ' + multiplikation;