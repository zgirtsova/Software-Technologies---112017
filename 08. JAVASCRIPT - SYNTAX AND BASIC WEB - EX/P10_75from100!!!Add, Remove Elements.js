function addRemoveElements(arr) {
    let result = [];
    for (var i = 0; i < arr.length; i++) {
        let inputLine = arr[i].split(' ');
        let command = inputLine[0];
        if(command == 'add') {
            let element = inputLine[1];
            result.push(element);
        } else if (command == 'remove') {
            let index = inputLine[1];
            result.splice(index, 1);
        }
    }
    console.log(result.join('\n'));
}
addRemoveElements(['add 3', 'add 5', 'remove 2', 'remove 0', 'add 7']);