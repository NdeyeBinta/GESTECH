function confirmation()
{
    return confirm("voulez vous supprimer?");
}

function calculMontantV(){
    var montant=document.forms[0].elements['puv'].value * document.forms[0].elements['qtev'].value;
    document.forms[0].elements['mntV'].value=montant;
}
function calculMontantA(){
    var montant=document.forms[0].elements['puach'].value * document.forms[0].elements['qteach'].value;
    document.forms[0].elements['mntA'].value=montant;
}