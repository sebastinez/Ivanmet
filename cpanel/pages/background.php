<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Indice</a>
  </li>
  <li class="breadcrumb-item active">Background</li>
</ol>


<div class="row">
<?php
try {
$json = file_get_contents("../localization/expertise.json");
$json_data = json_decode($json,true)["expertise"];
foreach ($json_data as $key => $value) {
?>
<div class="col-lg-6 input" style="border-bottom: 1px solid black; padding-top:10px;">
  <p><?php echo $value["en"]; ?></p>
</div>
<div class="col-lg-6 input" style="border-bottom: 1px solid black; padding-top:10px;">
  <p><?php echo $value["es"]; ?></p>
</div>
<?php 
}
} catch(Exception $e) {
  echo $e;
}
?>
</div>

<script>

function modifyText(e) {
  console.log(e.target)
}

function changeInput() { 
  const elementList = document.getElementsByClassName("input"); 
  const elementArray = Array.from(elementList)
  elementArray.forEach(m=>{
  m.addEventListener("click", modifyText, false); 
})
} 

document.addEventListener("DOMContentLoaded", changeInput, false);
</script>