let arr1 = [1,2,3,4,5,6,10]
let list = `<ul>`

arr1.forEach(element => 
    (list += ` <li>${element}</li>` )
    )
list += `</ul>`
//console.log(list)
document.querySelector('.arraylist').innerHTML = list


const container = document.querySelector(".container")   vbv 

const datanoms = [
    { name: 'Paul', occupation: 'teacher', age: 42 }, 
    { name: 'Alex', occupation: 'teacher', age: 44 },
    { name: 'Tom', occupation: 'teacher', age: 42 },
    { name: 'Andreas', occupation: 'student', age: 33 },
    { name: 'Kevin', occupation: 'student', age: 17 },
    { name: 'Linus', occupation: 'student', age: 17},
    { name: 'Mikael', occupation: 'student', age: 17 },
    { name: 'Eddie', occupation: 'student', age: 19 },
    { name: 'Kristoffer', occupation: 'student', age: 17 },
    { name: 'Rasmus', occupation: 'student', age: 18 },
    { name: 'Max', occupation: 'student', age: 17 },
    { name: 'Isak', occupation: 'student', age: 17 }
];

const totAge = datanoms.reduce((sum, datanom) => sum + datanom.age, 0);
console.log(totAge);
 
const showDatanoms = () => {

    let output = `

    <table class="card">
    <tr>
        <th>Name</th>
        <th>Occupation</th>
        <th>Age</th>
    </tr>`

    datanoms.forEach(
        ({name, occupation, age}) =>

        (output += `
        <tr>
            <td>${name}</td>
            <td>${occupation}</td>
            <td>${age}</td>
        </tr>  
        ` )

    )
        
    output += `<tr>
    <td>tot:</td>
    <td></td>
    <td>${totAge}</td>
</tr></table>`
    container.innerHTML = output

}

 

document.addEventListener("DOMContentLoaded", showDatanoms)



const code = [
    {name: 'john', langs: ['HTML','CSS']}, 
    {name: 'jack', langs: ['HTML','JavaScript','Python','TypeScript']}, 
    {name: 'diane', langs: ['JavaScript','PHP']}
];


/*
Plocka alla språk
*/
const languages = code.reduce((total, amount) => {
  amount.langs.forEach( lang => {
      total.push(lang);
  })
  return total;
}, [])

//console.log(languages) 

console.log('ALLA språk: ' + languages.length)

languages.forEach(element => console.log(element));


/*
plocka unika språk
*/
const uniqueLangs = code.reduce((total, amount) => {
  amount.langs.forEach( lang => {
    if (total.indexOf(lang) === -1){
     total.push(lang);
    }
  });
  return total;
}, []);

//console.log(uniqueLangs)
console.log('UNIKA språk: ' + uniqueLangs.length)
uniqueLangs.forEach(element => console.log(element));
