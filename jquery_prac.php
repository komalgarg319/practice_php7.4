<!DOCTYPE html>
<html>
  
<head>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  
    <script>
        $(document).ready(function () {
            $("#button1").click(function () {
                alert("Using text()- " + $("#demo").text());
            });
            $("#button2").click(function () {
                prompt("Using html()- " + $("#demo").html());
            });
            $( "li.item-ii" ).find( "li" ).css( "background-color", "red" );
           $( "ul.level-2" ).children().css( "background-color", "green" );
           var i=3;
           abc(i);
    
    function abc(i){​​​​​​
     i= i+1;
    console.log(i)
    }​​​​​​
    
    console.log(i)
    </script>
</head>
  
<body>
<ul class="level-1">
  <li class="item-i">I</li>
  <li class="item-ii">II
    <ul class="level-2">
      <li class="item-a">A</li>
      <li class="item-b">B
        <ul class="level-3">
          <li class="item-1">1</li>
          <li class="item-2">2</li>
          <li class="item-3">3</li>
        </ul>
      </li>
      <li class="item-c">C</li>
    </ul>
  </li>
  <li class="item-iii">III</li>
</ul>
<ul class="level-1">
  <li class="item-i">I</li>
  <li class="item-ii">II
    <ul class="level-2">
      <li class="item-a">A</li>
      <li class="item-b">B
        <ul class="level-3">
          <li class="item-1">1</li>
          <li class="item-2">2</li>
          <li class="item-3">3</li>
        </ul>
      </li>
      <li class="item-c">C</li>
    </ul>
  </li>
  <li class="item-iii">III</li>
</ul>
    <p id="demo">By clicking on the below buttons,
        <b>difference</b> between
        <i>text</i> and <i>html</i> in
        <b>jQuery</b> is shown.
    </p>
  
    <button id="button1">Text</button>
    <button id="button2">HTML</button>
</body>
  
</html>