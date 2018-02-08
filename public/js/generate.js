function GetRandom()
{
    var myElement = document.getElementById("ordernumber");
    var first = "110";
    var seperator = "-";
    var middle = Math.floor((Math.random() * 99999999) + 10000000);
    var last = Math.floor((Math.random() * 99999999) + 10000000);
    myElement.value = first + seperator + middle + seperator + last;
}
