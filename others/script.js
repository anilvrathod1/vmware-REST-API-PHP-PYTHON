const request = new XMLHttpRequest();

request.open('GET', 'http://puppet.os.capgemini.nl/test/api-test/cluster.php');
request.send();

request.onload = () => {
  if (request.status === 200) {
    console.log("Success"); // So extract data from json and create table

    //Extracting data
    var clustername = JSON.parse(request.response).value.name;

    //Creating table
    var table="<table>";
        table+="<tr><td>Cluster Name</td></tr>";
        table+="</table>";

    //Showing the table inside table
    document.getElementById("mydiv").innerHTML = table;
  }
};

request.onerror = () => {
  console.log("error")
};

