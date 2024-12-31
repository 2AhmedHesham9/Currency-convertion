
function sub()
{
    selectElement1 = document.getElementById('sel1');
    output1 = selectElement1.options[selectElement1.selectedIndex].value;


    selectElement2 = document.getElementById('sel2');
    output2 = selectElement2.options[selectElement2.selectedIndex].value;

    var result=0;
    x=document.getElementById("amount").value;
  
     if(output1=="egypt" && output2=="america")
     {
        document.getElementById("conv").innerHTML="Converted Amount: ";

        z=document.getElementById("dollar").innerHTML;
        result=x/z;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "$");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="kuit")
     {
      
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/100.23;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "KD");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="saudia")
     {
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/8.24;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "SR");
      

    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="portoghal")
     {
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/33.24;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "€");
      
    document.getElementById("conv").style.display=" block";
     }
     else if(output1=="egypt" && output2=="emirat")
     {
        document.getElementById("conv").innerHTML="Converted Amount: ";
        result=x/8.42;
      const y=document.getElementById("conv") ;

       y.insertAdjacentText('beforeend', result);
       y.insertAdjacentText('beforeend', "UAE");
      
    document.getElementById("conv").style.display=" block";
   
    
     }

   
  
   
};
function reset(){
    window.location.reload();
    document.getElementsByClassName("finalValue").innerHTML = "";
}

      