// verificatiion de l'existence du login 
function verifUtilisateur(login){
    $i=document.getElementById('info');
    if(login.value==""){
        $i.innerHTML='';
    }
    obAjax=new creationObjetXMLHttpRequest();
    args="login="+login.value;
    obAjax.open('POST','modele/controlemodele.php',true);// false si synchrone
    obAjax.setRequestHeader("content-type","application/x-www-form-urlencoded");
    //obAjax.setRequestHeader("content-length",args.length);
    obAjax.onreadystatechange=traimentResultat;// nom de la fonction
    obAjax.send(args);
}
function creationObjetXMLHttpRequest(){
    try{
        var requete=new XMLHttpRequest();
    } catch(e1){
        try{
            var requete=new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e2){
            try{
                requete=new ActiveXObject("Microsoft.XMLHTTP");  
            }
            catch(e3){
                return False;
            }
        }
    }
    return requete;
}
function traimentResultat(){
    if(this.readyState==4){
        if(this.status==200){
            if(this.responseText!=''){
                $i.innerHTML=this.responseText;
            }
            else {
                alert('RIEN');
            }
        }
    }
}
