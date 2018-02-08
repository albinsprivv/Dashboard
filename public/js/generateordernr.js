function GenerateOrderNr()
{
    var myElement = document.getElementById("ordernumber");
    var first = "85";
    var last = Math.floor((Math.random() * 99999999) + 10000000);
    myElement.value = first + last;
}
