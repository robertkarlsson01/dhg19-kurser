var num = 13,
    name = 'Paul',
    hour = 13,
    hour_output;

if(num <= 3) {
    console.log(num + ' är mindre eller lika med 3');
} else {
    //num > 3
    console.log(num + ' är större än 3');
}

if(name === 'Paul') {
    var output = 'Hej Paul';
} else {
    var output = 'Hej Guest';
}
console.log(output);

if(hour >= 6 && hour <= 10) {
    hour_output = 'God morgon';
} else if(hour >= 11 && hour <= 16) {
    hour_output = 'God dag';
} else if(hour >= 17 && hour <= 22) {
    hour_output = 'God kväll';
} else {
    hour_output = 'Vet inte tiden på dygnet';
}

console.log(hour_output);