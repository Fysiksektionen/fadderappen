<?php $title = 'Fester'; include('template/head.php'); ?>

<div class="row">
  <div class="large-12 columns">
    <h1>Anmälan till fester</h1>
    <p>Infon på den här sidan gäller faddrar. För nØllan, se <a href="n0llans-biljetter.php">nØllans biljetter</a>.</p>
    <ul class="accordion" data-accordion>
      <li class="accordion-navigation">
        <a href="#anmalan">Anmälan</a>
        <div id="anmalan" class="content">
            <p>Anmälan sker via anmälningsformulär:</p>
            <ul>
                <li><a href="http://bit.ly/valkomst-2015">Välkomst 20/8</a></li>
                <li><a href="http://bit.ly/n0llebanquette-2015">nØllebanquetten 22/8</a></li>
                <li><a href="http://bit.ly/stugan-2015">Stugan 29/8</a></li>
            </ul>
        </div>
    </li>
    <li class="accordion-navigation">
        <a href="#priser">Priser</a>
        <div id="priser" class="content">
            <table>
                <tr><th>Fest</th><th>Alk</th><th>Alkfri</th></tr>
                <tr>
                    <td>Välkomstgasquen</td>
                    <td>200</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>nØllebanquetten</td>
                    <td>340</td>
                    <td>370</td>
                </tr>
                <tr>
                    <td>Stuggasquen</td>
                    <td>270</td>
                    <td>230</td>
                </tr>
            </table>
        </div>
    </li>
    <li class="accordion-navigation">
        <a href="#bekräftelse-och-betalning">Bekräftelse och betalning</a>
        <div id="bekräftelse-och-betalning" class="content">
            <p>
                När du anmält dig står du på <emph>intresselista</emph>, och får din plats bekräftad så fort vi hinner behandla din anmälan. När du får bekräftelsemailet, sätt in rätt summa på Mottagningens BG 5571-7649
            </p>
        </div>
    </li>
</ul>
</div>
</div>
<?php include('template/footer.php'); ?>
