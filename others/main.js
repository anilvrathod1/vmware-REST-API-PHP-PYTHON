var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("cluster").innerHTML = myObj.name;
    }
};
xmlhttp.open("GET", "cluster.php", true);
xmlhttp.send();
