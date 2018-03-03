function lettersOnly(input)
{
    var regex = /[^a-z ]/gi;
    input.value = input.value.replace(regex, "");
}
function addressOnly(input)
{
    var regex = /[^#.,0-9a-z ]/gi;
    input.value = input.value.replace(regex, "");
}
function numbersOnly(input)
{
    var regex = /[^0-9]/g;
    input.value = input.value.replace(regex, "");
}