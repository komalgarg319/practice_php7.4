<!DOCTYPE html>
<html>
  
<head>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  
    <script>
     var i=3;
        $(document).ready(function () {
          
           console.log(i);
          
    

function abc() {
   i = i+1 ; 
   console.log(i);        
}
  abc(i);  
  console.log(i);
});
    </script>
</head>
  
<body>

</body>
  
</html>