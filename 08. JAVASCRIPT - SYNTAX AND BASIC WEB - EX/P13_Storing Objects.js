function storingObj(arr) {
    let students = [];
    for (let i = 0; i < arr.length; i++) {
        let input = arr[i].split(' -> ');
        let name = input[0];
        let age = input[1];
        let grade = input[2];
        let obj = {name: name, age: age, grade: grade};
        students.push(obj);
    }
    for (var i = 0; i < students.length; i++) {
        console.log(`Name: ${students[i].name}`);
        console.log(`Age: ${students[i].age}`);
        console.log(`Grade: ${students[i].grade}`);
    }
}
storingObj(['Pesho -> 13 -> 6.00', 'Ivan -> 12 -> 5.57', 'Toni -> 13 -> 4.90']);