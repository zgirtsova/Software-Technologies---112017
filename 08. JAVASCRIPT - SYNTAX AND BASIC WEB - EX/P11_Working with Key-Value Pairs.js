function workingWithKVPairs(arr) {
    let result = {}
    for (let i = 0; i < arr.length - 1; i++) {
        let input = arr[i].split(' ');
        let key = input[0];
        let val = input[1];

        result[key] = val;
    }
    let lastEl = arr[arr.length - 1];

    if (result[lastEl] == undefined) {
        console.log('None');
    } else {
        console.log(result[lastEl]);
    }

}

workingWithKVPairs(['key value', 'key eulav', 'test tset', 'key']);