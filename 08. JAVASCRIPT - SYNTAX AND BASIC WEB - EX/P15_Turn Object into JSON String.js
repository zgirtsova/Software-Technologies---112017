function turnObjectIntoJSONString(arr) {
    let obj = {};
    let values = arr.forEach(p => {
        let [key, value] = p.split(' -> ');
        if(!Number.isNaN(Number(value))) {
            value = Number(value)
        }
        obj[key] = value;
    });
    return JSON.stringify(obj);
}
console.log(turnObjectIntoJSONString([
    'name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.340',
    'date -> 23/05/1995',
    'town -> Sofia'
]));
let p = ""