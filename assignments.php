<?php
	include "_header.php";
	if(isset($_GET['nr'])){
		$assignment = $_GET['nr'];
		if(file_exists("assignments/$assignment/index.php")){
        ?>
            <div class="row">
                <div class="col-lg-8 create-submenu">
                <?php
                     include "assignments/$assignment/index.php";
                ?>
               </div>
                <div class="col-lg-4 submenu-area"></div>
        	</div>
        <?php
		}else{
			echo "<h3>Här fanns tyvärr inget, dubbelkolla adressen</h3>";
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Inlämningsuppgifter</h2>
			<p>Dessa uppgifter är, till skillnad från laborationerna, examinerande - vilket betyder att de är obligatoriska att genomföra för godkänt kursbetyg. Under höstterminen 2014 ingår tre uppgifter, som publiceras under kursens gång (enligt <a href="plan.php">planen</a>). Uppgifterna motsvarar 3,5 hp, och kan ge betyget Godkänd.</p>
			<p>Inlämningsuppgifterna publiceras under kursens gång.</p>
			<table class="table table-striped">
			    <tr>
			        <th>Inlämningsuppgift</th>
			    </tr>
			    <tr>
                    <td>Mer info kommer</td>
			    </tr>
			</table>
		</div>
		<div class="col-lg-4 submenu-area">
			<!--<h2>Bra länkar</h2>-->
		</div>
	</div>

    <hr>
<?php
	}
	include "_footer.php";
?>
