<?php

  //Memilih Ac Type
  $sql0 = "SELECT DISTINCT ACtype FROM mcdrnew";
  $res0 = mysqli_query($link, $sql0);

 ?>

<form action="pareto.php" method="post" style="margin-bottom: 50px">
  <table>
    <tbody>
      <tr>
        <th>
          A/C Type
        </th>
        <th>
          <select name="actype" style="">
              <?php
                while($row = $res0->fetch_array(MYSQLI_NUM))
                  echo "<option value=".$row[0].">".$row[0]."</option>";
               ?>
          </select>
        </th>
        <th></th>
        <th></th>
        <th>
          <input type="submit" value="Display Report">
        </th>
        <th>
          <input type="submit" value="Export Excel">
        </th>
        <th>
          <input type="submit" value="Export PDF">
        </th>
      </tr>
      <tr>
        <th>
          A/C Reg
        </th>
        <th>
          <input type="text" name="acreg">
        </th>
      </tr>
      <tr>
        <th>
          Date from
        </th>
        <th>
          <input type="date" name="datefrom" id="id_datefrom">
        </th>
        <th>
          Date to
        </th>
        <th>
          <input type="date" name="dateto" id="id_dateto">
        </th>
      </tr>
    </tbody>
  </table>

        <th>
          Graph settings for X-axis
        </th>
        <th>
          <input type="radio" name="graph" value="1"> 1
          <input type="radio" name="graph" value="2"> 2
          <input type="radio" name="graph" value="3"> 3
          <input type="radio" name="graph" value="4"> 4
          <input type="radio" name="graph" value="5"> 5
          <input type="radio" name="graph" value="6"> 6
          <input type="radio" name="graph" value="7"> 7
          <input type="radio" name="graph" value="8"> 8
          <input type="radio" name="graph" value="9"> 9
          <input type="radio" name="graph" value="10"> 10
        </th>

</form>
