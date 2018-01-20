module.exports = function(lvalue, rvalue, options) {
  if (arguments.length < 3)
    throw new Error("Handlebars CheckIf Helper equal requires 2 parameters")
  if (lvalue == rvalue) {
    return 'checked';
  } else {
    return '';
  }
}
