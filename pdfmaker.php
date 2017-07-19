<!doctype html>
 <html lang='en'>
 <head>
 	<meta charset='utf-8'>
 	<title>my first pdfmake example</title>
 	<script src='js/pdfmake.min.js'></script>
 	<script src='js/vfs_fonts.js'></script>
 </head>
 <body>
 	<script type="text/javascript">
 		var docDefinition = {
		  content: [
		    {
		      table: {
		        // headers are automatically repeated if the table spans over multiple pages
		        // you can declare how many rows should be treated as headers
		        headerRows: 1,
		        widths: [ '*', 'auto', 100, '*' ],

		        body: [
		          [ 'First', 'Second', 'Third', 'The last one' ],
		          [ 'Value 1', 'Value 2', 'Value 3', 'Value 4' ],
		          [ { text: 'Bold value', bold: true }, 'Val 2', 'Val 3', 'Val 4' ]
		        ]
		      }
		    }
		  ]
		};

 		pdfMake.createPdf(docDefinition).download('optionalName.pdf');
 	</script>
 </body>
 </html>