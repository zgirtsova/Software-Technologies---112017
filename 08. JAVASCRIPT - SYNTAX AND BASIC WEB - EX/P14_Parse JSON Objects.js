function parseJSONobj(arr) {
    let result = [];
    for (var i = 0; i < arr.length; i++) {
        result[i] = JSON.parse(arr[i]);
    }
    for(let r of result) {
        console.log(`Name: ${r.name}`);
        console.log(`Age: ${r.age}`);
        console.log(`Date: ${r.date}`);
    }
}
parseJSONobj(['{"name":"Gosho","age":10,"date":"19/06/2005"}',
'{"name":"Tosho","age":11,"date":"04/04/2005"}']);