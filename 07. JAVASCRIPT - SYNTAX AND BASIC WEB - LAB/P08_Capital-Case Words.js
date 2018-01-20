function capsLetters(arr) {
    let str = arr.join(',');

    const regex = /\b[A-Z]+\b/g;
    let m;
    let matches = [];

    while ((m = regex.exec(str)) !== null) {
        // This is necessary to avoid infinite loops with zero-width matches
        if (m.index === regex.lastIndex) {
            regex.lastIndex++;
        }

        // The result can be accessed through the `m`-variable.
        m.forEach((match, groupIndex) => {
            /*console.log(`Found match, group ${groupIndex}: ${match}`);*/
            matches.push(match);
        });
    }
    console.log(matches.join(', '));
}
capsLetters();
