function productOfThree(arr) {
    let input = arr.map(x => Number(x));
    if (input.includes(0)) {
        console.log("Positive");
    } else {
        let countNegatives = arr.filter(x => x < 0).length;
        if (countNegatives % 2 !== 0) {
            console.log('Negative');
        } else {
            console.log('Positive');
        }
    }
}

productOfThree(['3', '-8', '-2', '-5', '-11', '-2', '3', '10', '-2']);