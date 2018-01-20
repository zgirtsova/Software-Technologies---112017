function sum([input]) {
    let arr = input.split(' ');
    let num1 = Number(arr[0]);
    let num2 = Number(arr[1]);
    let num3 = Number(arr[2]);

    if (num1 + num2 == num3) {
        console.log(`${Math.min(num1, num2)} + ${Math.max(num1, num2)} = ${num3}`);
    } else if (num1 + num3 == num2) {
        console.log(`${Math.min(num1, num3)} + ${Math.max(num1, num3)} = ${num2}`);
    } else if (num2 + num3 == num1) {
        console.log(`${Math.min(num3, num2)} + ${Math.max(num3, num2)} = ${num1}`);
    } else {
        console.log('No');
    }
}

function solution([input]) {
    let numbers = input.split(' ').map(Number);
    numbers.sort((a, b) => a - b);
    console.log(numbers);
}

solution(['15 7 8']);

(new Date()).toLocaleDateString();