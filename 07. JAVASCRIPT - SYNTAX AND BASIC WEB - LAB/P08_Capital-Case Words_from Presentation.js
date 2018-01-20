function extractCapitalCaseWords(arr) {
    let text = arr.join(","); //string
    let words = text.split(/\W+/); //array of strings
    let nonEmptyWords = words.filter(w => w.length > 0); // array of non empty strings
    let upWords = nonEmptyWords.filter(isUppercase); // array of strings wit Uppercase only
    // can replace the upper isUppercase with .filter(x => x===x.toUpperCase())
    console.log(upWords.join(", "));

    function isUppercase(str) {
        return str === str.toUpperCase();
    }
}