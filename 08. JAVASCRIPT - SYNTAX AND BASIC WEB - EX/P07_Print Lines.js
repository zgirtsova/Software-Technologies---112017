function printLines(arr) {
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == 'Stop') {
            break;
        } else {
            console.log(arr[i]);
        }
    }
}