function suiviTrajet(villeDepart)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/Ctrl_Accueil/afficherMedDeconseiller",
        data:"villeDepart="+villeDepart,
        success:function(data)
        {
            $('#villeDepart').empty();
            $('#villeDepart').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}