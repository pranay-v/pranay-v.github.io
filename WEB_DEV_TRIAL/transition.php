<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="design.css">
<style>
div {
    background-color:white;
    opacity:0.5;
    color:blue;
    width:50%;
    height:50%;
    padding:5%;
    text-align:center;
}

</style>

<body onload = "setTimeout(move,3000)">

<div><h1>Welcome, user</h1> 
<script>
function move()
{
    location.replace("index.php");
}
</script>
</div>
</body>
</html>