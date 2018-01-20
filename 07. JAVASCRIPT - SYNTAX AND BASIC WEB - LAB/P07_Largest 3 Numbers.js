function largest3(arr) {
    let nums = arr.map(Number);
    nums.sort((a,b) => a - b);
    let count = Math.min(3, nums.length);
    for (let i = 0; i < count; i++) {
        console.log(nums.pop());
    }
};
largest3([
    '4', '6', '2', '1'
]);