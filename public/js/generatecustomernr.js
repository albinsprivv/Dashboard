function GenerateCustomerNr()
{
    var myElement = document.getElementById("customernr");
    var first = "95";
    var last = Math.floor((Math.random() * 99999999) + 10000000);
    myElement.value = first + last;
}
