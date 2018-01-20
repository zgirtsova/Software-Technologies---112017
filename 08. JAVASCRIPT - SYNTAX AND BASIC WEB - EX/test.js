let capitals = ['Sofia', 'Washington', 'London', 'Paris'];
for (let capital of capitals) {
    console.log(capital);
    for (let i in capital) {
        console.log(capital[i]);
    }
}

