<script>
function isValid(){
      var Search=document.forms["mForm"]["Search"].value;
     
      
      if(Search==="")
     // {
       // document.getElementById("searchErr").innerHTML="Field Empty";

        //return false;
      

    //}

      {
        document.getElementById("searchError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(searchError!=="")
      {
        document.getElementById("searchError").innerText="";
      }



    }
    </script>
     