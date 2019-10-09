

	</body>
</html>
<script>
$(document).ready( function () {
    $('#navneet').dataTable({
    aLengthMenu: [
        [25, 50, 100, 200, -1],
        [25, 50, 100, 200, "All"]
    ],
    iDisplayLength: -1
});} );
 



function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;
    csvFile = new Blob([csv], {type: "text/csv"});
    downloadLink = document.createElement("a");
    downloadLink.download = filename;
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var hea = [];
    var r = []
    var header = document.querySelectorAll("#navneet thead");
    var rows = document.querySelectorAll("#navneet tr");
    for(var k=0;k < 1;k++){ 
                      hea = header[k].querySelectorAll("#navneet th");
                      for( var p = 0; p < hea.length;p++) {
                      console.log(hea[p].innerHTML);  
                      r.push(hea[p].innerHTML);
                      }
                      csv.push(r.join(","));
    }
    for (var i = 0; i < rows.length; i++) {
        var row = [],
        cols = rows[i].querySelectorAll("#navneet td");
        document.getElementById("pBar").style.width = i + '%';      
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
          csv.push(row.join(","));       
    }
    downloadCSV(csv.join("\n"), filename);
}
</script>