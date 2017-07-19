<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>
<body>
    <button onclick="demoFromHTML()">PDF</button>
    <div id="customers">
        <table id="tab_customers" class="table table-striped" >
            <colgroup>
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
            </colgroup>
            <thead>         
                <tr class='warning'>
                    <th>Country</th>
                    <th>Population</th>
                    <th>Date</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chinna</td>
                    <td>1,363,480,000</td>
                    <td>March 24, 2014</td>
                    <td>19.1</td>
                </tr>
                <tr>
                    <td>India</td>
                    <td>1,241,900,000</td>
                    <td>March 24, 2014</td>
                    <td>17.4</td>
                </tr>
                <tr>
                    <td>United States</td>
                    <td>317,746,000</td>
                    <td>March 24, 2014</td>
                    <td>4.44</td>
                </tr>
                <tr>
                    <td>Indonesia</td>
                    <td>249,866,000</td>
                    <td>July 1, 2013</td>
                    <td>3.49</td>
                </tr>
                <tr>
                    <td>Brazil</td>
                    <td>201,032,714</td>
                    <td>July 1, 2013</td>
                    <td>2.81</td>
                </tr>
            </tbody>
        </table> 
    </div>
    <script src="bower_components/jspdf/dist/jspdf.min.js"></script>
	<script src="bower_components/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>
    <script type="text/javascript">
        var columns = ["ID", "Name", "Country"];
		var rows = [
		    [1, "Shaw", "Tanzania", ...],
		    [2, "Nelson", "Kazakhstan", ...],
		    [3, "Garcia", "Madagascar", ...],
		    ...
		];

		// Only pt supported (not mm or in)
		var doc = new jsPDF('p', 'pt');
		doc.autoTable(columns, rows);
		doc.save('table.pdf');
    </script>
</body>
</html>