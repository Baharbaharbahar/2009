function valide(){
    cin=document.getElementById("cin").value;
    nom=document.getElementById("nom").value;
    pre=document.getElementById("pre").value;
    if(!num(cin)){
        alert (" verifier votre cin !!!");
        return false;
    }
    if(!txt(nom)||(!txt(pre))){
        alert ("verfirr  nom et prenom");
        return false;
    }
}
function num(ch){
  if (ch.length!=8)
  {
      test=false;
    }
    else
    {
      i=0;
      tset=true;
      while((i<ch.length)&&(test==true))
      {
          if((ch.chraAt(i)<"0")||(ch.chraAt(i)>"9"))
          {
            test=false;
          }
          i++;
      }

  }
  return (test);
}
function txt(ch){
    ch=ch.toUpperCase();
    i=0;
    test=true;
    while ((i<ch.length)&&(test==true)){
        if ((ch.chraAt(i)<"A")||(ch.chraAt(i)>"Z"))
        {
            test=false;
        }
        i++;
    }
    return (test);
}