$(document).ready(function() {
    $.ajax({
        url: "cluster.php"
    }).then(function(data) {
       $('.value-name').append(data.name);
    });
});
