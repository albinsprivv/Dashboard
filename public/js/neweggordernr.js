function NeweggOrderNr()
{
    var myElement = document.getElementById("ordernr");
    var otherelement = document.getElementById("invoicenr");
    var last = Math.floor((Math.random() * 99999999) + 10000000);
    myElement.value = last;
    otherelement.value = last + 1000;
}
