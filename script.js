function change(var1)
{
  console.log(var1);
  xhr = new XMLHttpRequest();
  xhr.open('POST','traitement.php');

  params="var="+var1;
  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");

  xhr.send(params);

  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200)
      document.getElementById('reponse').innerHTML = xhr.responseText;
  };
}
