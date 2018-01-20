function multipleValues(arr) {
    let result = {};
    for (let i = 0; i < arr.length - 1; i++) {
        let input = arr[i].split(' ');
        let key = input[0];
        let val = input[1];

        if(result[key] === undefined) {
            result[key] = [val];
        } else {
            result[key].push(val);
        }

        // if(key in result) {
        //     result[key].push(val);
        // } else {
        //     result[key] = new Array();
        //     result[key].push(val);
        // }
    }
    let last = arr[arr.length - 1];
    if (result[last] == undefined) {
        console.log('None');
    } else {
        for (var i = 0; i < result[last].length; i++) {
            console.log(result[last][i]);
        }
    }
}
multipleValues(['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4']);