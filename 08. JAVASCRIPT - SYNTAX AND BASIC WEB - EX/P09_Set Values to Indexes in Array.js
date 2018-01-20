function setValtoIndexes(arr) {
    let n = Number(arr[0]);
    let vals = [];
    for (var i = 0; i < n; i++) {
        vals[i] = 0;
    }
    for (var i = 1; i < arr.length; i++) {
        let inputLine = arr[i].split(' - ');
        let index = Number(inputLine[0]);
        let value = Number(inputLine[1]);
        vals[index] = value;
    }
    console.log(vals.join(`\n`));
}
let arr = ['3', '0 - 5', '1 - 6', '2 - 7'];
setValtoIndexes(arr)